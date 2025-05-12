<?php

namespace WP_Docs_Parser;

use RuntimeException;

class WP_API_Client {

	private string $url;

	private string $output_dir;

	private int $delay = 0;

	public function __construct( string $url, ?string $output_dir = null ) {
		$this->url = rtrim( $url, '/' );

		if ( ! isset( $output_dir ) ) {
			$output_dir = sprintf( '%s/%s', __DIR__, parse_url( $url, PHP_URL_HOST ) );
		}

		$this->output_dir = rtrim( $output_dir, '/' );
	}

	public function get_url(): string {
		return $this->url;
	}

	public function get_url_hostname(): string {
		return parse_url( $this->url, PHP_URL_HOST );
	}

	public function set_delay( int $delay ) {
		$this->delay = $delay;
	}

	private function get_output_dir( ?string $path = null ): string {
		$output_dir = $this->output_dir;

		if ( isset( $path ) ) {
			$output_dir = sprintf( '%s/%s', $this->output_dir, ltrim( $path, '/' ) );
		}

		if ( ! is_dir( $output_dir ) ) {
			mkdir( $output_dir, 0755, true );
		}

		return $output_dir;
	}

	private function get_output_file( string $path ): string {
		$path = trim( $path, '\\/' );

		if ( false !== strpos( $path, '/' ) ) {
			return sprintf( '%s/%s', $this->get_output_dir( dirname( $path ) ), basename( $path ) );
		}

		return sprintf( '%s/%s', $this->get_output_dir(), ltrim( $path, '\\/' ) );
	}

	private function get_url_to( string $path ) {
		return sprintf( '%s/%s', $this->url, ltrim( $path, '\\/' ) );
	}

	private function log( $message, ...$args ) {
		if ( ! empty( $args ) ) {
			$message = sprintf( $message, ...$args );
		}

		echo $message . PHP_EOL;
	}

	private function guess_sitemap_url(): ?string {
		$paths = [
			'sitemap.xml',
			'wp-sitemap.xml', // WP core
			'sitemap_index.xml', // Yoast
		];

		$sitemap_urls = array_map(
			fn( $path ) => $this->get_url_to( $path ),
			$paths
		);

		$sitemap_urls = array_filter(
			$sitemap_urls,
			fn( $url ) => false !== @file_get_contents( $url )
		);

		if ( $sitemap_urls ) {
			return array_pop( $sitemap_urls );
		}

		return null;
	}

	public function get_json( string $path, ?bool $associative = true ) {
		$path = $this->get_output_file( $path );

		if ( is_file( $path ) ) {
			return json_decode( file_get_contents( $path ), $associative );
		}

		return null;
	}

	public function save_file( string $path, $data ) {
		file_put_contents( $this->get_output_file( $path ), $data );
	}

	public function save_json( string $path, $data ) {
		$this->save_file( 
			$path,
			json_encode( $data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES ) 
		);
	}

	public function get_sitemap_urls( ?string $sitemap_url = null ) {
		if ( ! isset( $sitemap_url ) ) {
			$sitemap_url = $this->guess_sitemap_url();
		}

		$sitemap = simplexml_load_file( $sitemap_url );
	
		$urls = [];
	
		foreach ( $sitemap->url as $url ) {
			$urls[] = [ (string) $url->loc, $sitemap_url ];
		}
	
		$this->log( 'Found %d URLs in %s', count( $urls ), $sitemap_url );
	
		// Resolve child sitemaps, if any.
		if ( ! empty( $sitemap->sitemap ) ) {
			foreach ( $sitemap->sitemap as $sitemap ) {
				$urls = array_merge( $urls, $this->get_sitemap_urls( (string) $sitemap->loc ) );

				if ( $this->delay ) {
					sleep( $this->delay );
				}
			}
		}
		
		return $urls;
	}

	private function get_rest_api_url( string $path, array $args = [] ): string {
		$url = $this->get_url_to( sprintf( 'wp-json/%s', ltrim( $path, '/' ) ) );

		if ( ! empty( $args ) ) {
			$url .= '?' . http_build_query( $args );
		}

		return $url;
	}

	private function get_request( string $url ): array {
		$context = stream_context_create( 
			[
				'http' => [
					'method' => 'GET',
					'ignore_errors' => true,
				],
			]
		);

		$time_start = microtime( true );
		$body = file_get_contents( $url, false, $context );
		$response_time = microtime( true ) - $time_start;

		return [
			'time' => time(),
			'duration' => $response_time,
			'headers' => $http_response_header,
			'body' => $body,
		];
	}

	private function with_file_cache( string $path, callable $callback ): ?string {
		$cache_file = $this->get_output_file( $path );

		if ( ! file_exists( $cache_file ) ) {
			$output = call_user_func( $callback );

			if ( ! is_string( $output ) ) {
				throw new RuntimeException( 'Response from callback must be a string to be cached in a file' );
			}
			
			file_put_contents( $cache_file, $output );
		}

		return (string) file_get_contents( $cache_file );
	}

	private function fetch_url_with_cache( $url ): array {
		$meta = json_decode(
			$this->with_file_cache( 
				sprintf( 'http-cache/%s.json', sha1( $url ) ), 
				fn() => json_encode( $this->get_request( $url ) )
			),
			true
		);

		$response_headers = array_filter(
			$meta['headers'],
			fn( $header ) => false === stripos( $header, 'http/' )
		);

		$headers = [];
		foreach ( $response_headers as $header ) {
			$header_parts = explode( ':', $header );
			$headers[ trim( strtolower( $header_parts[0] ) ) ] = trim( implode( ':', array_slice( $header_parts, 1 ) ) );
		}

		// Extract the HTTP code from the first element.
		preg_match( '/ \d+ /', $meta['headers'][0], $http_code );
		$http_code = (int) trim( array_pop( $http_code ) );

		$response = [
			'url' => $url,
			'status' => $http_code,
			'headers' => $headers,
			'body' => $meta['body'],
		];

		return $response;
	}

	private function fetch_json( $url ): array {
		$json = @file_get_contents( $url );

		if ( false === $json ) {
			$error = error_get_last();

			throw new RuntimeException( sprintf( 'Failed to fetch %s: %s', $url, $error['message'] ) );
		}

		return json_decode( $json, true );
	}

	public function get_from_rest_api( string $type ): array {
		$page = 1;
	
		while ( true ) {
			$updated_ids = [];

			$url = $this->get_rest_api_url( 
				'wp/v2/' . $type, 
				[ 
					'page' => $page++, 
					'per_page' => 100, 
					'order' => 'desc', 
					'orderby' => 'modified' 
				] 
			);
			
			try {
				$posts = $this->fetch_json( $url );
			} catch ( RuntimeException $e ) {
				$this->log( 'Failed to fetch %s: %s', $url, $e->getMessage() );
				break;
			}
	
			if ( empty( $posts ) ) {
				break;
			}
	
			foreach ( $posts as $post ) {
				if ( empty( $post['id'] ) ) {
					continue;
				}

				$json_file = sprintf( 'api-json/%s-%d.json', $type, $post['id'] );
				$json_post = $this->get_json( $json_file );
			
				if ( is_null( $json_post ) ) {
					$this->log( 'Saving %s %d to %s', $type, $post['id'], $json_file );
					$this->save_json( $json_file, $post );
					$updated_ids[] = $post['id'];
				} elseif ( empty( $json_post['modified'] ) || $post['modified'] > $json_post['modified'] ) {
					$this->log( 'Updating %s %d to %s', $type, $post['id'], $json_file );
					$this->save_json( $json_file, $post );
					$updated_ids[] = $post['id'];
				} else {
					$this->log( 'Already up to date %s %d at %s', $type, $post['id'], $json_file );
				}
			}

			if ( empty( $updated_ids ) ) {
				$this->log( 'No new %s posts found, exiting.', $type );
				break;
			}

			if ( $this->delay ) {
				sleep( $this->delay );
			}
		}

		return $this->get_json_files_for_content_types( [ $type ] );
	}

	public function get_json_files_for_content_types( array $content_types ): array {
		$pattern = sprintf( $this->get_output_file( 'api-json/{%s}-*.json' ), implode( ',', $content_types ) );

		return array_map(
			fn( $file ) => sprintf( 'api-json/%s', basename( $file ) ), // Relative to the output dir.
			glob( $pattern, \GLOB_BRACE )
		);
	}

	public function get_image_urls_in_content( string $content ): array {
		$images = [];

		if ( preg_match_all( '/\ssrc\s*=\s*["\']?([^"\' >]+)["\']?/', $content, $matches ) ) {
			foreach ( $matches[1] as $image_url ) {
				$image_url = html_entity_decode( $image_url );
				$images[] = $image_url;

				// Derive the originals too.
				if ( preg_match( '/-(\d+x\d+)\./', $image_url, $resize_match ) ) {
					$images[] = str_replace( $resize_match[0], '.', $image_url );
				}

				if ( stripos( $image_url, '-scaled.' ) ) {
					$images[] = str_replace( '-scaled.', '.', $image_url );
				}
			}
		}

		return $images;
	}

	public function get_image_urls_in_content_types( array $content_types ): array {
		$urls = [];

		foreach ( $this->get_json_files_for_content_types( $content_types ) as $json_file ) {
			$post = $this->get_json( $json_file );

			$urls = array_merge(
				$urls,
				$this->get_image_urls_in_content( $post['content']['rendered'] )
			);
		}
	
		return $urls;
	}

	public function get_original_urls( array $urls ) {
		return array_filter(
			$urls,
			fn( $url ) => ( 0 === preg_match( '/-\d+x\d+\./', $url ) && false === stripos( $url, '-scaled.' ) )
		);
	}

	public function get_local_urls( array $urls ) {
		$host = parse_url( $this->url, PHP_URL_HOST );

		return array_filter(
			$urls,
			fn( $url ) => false !== strpos( $url, $host )
		);
	}

	public function get_attachment_urls(): array {
		$attachment_urls = [];

		foreach ( $this->get_json_files_for_content_types( [ 'media' ] ) as $json_file ) {
			$media = $this->get_json( $json_file );

			$attachment_urls[] = $media['source_url'];
		}

		return array_filter( $attachment_urls );
	}

	private function get_link_urls_in_content( string $content ): array {
		$links = [];

		if ( preg_match_all( '/href\s*=\s*["\']?([^"\' >]+)["\']?/', $content, $matches ) ) {
			foreach ( $matches[1] as $link_url ) {
				$links[] = html_entity_decode( trim( $link_url ) );
			}
		}

		return $links;
	}

	public function get_link_urls_in_content_types( array $content_types ): array {
		$links = [];
	
		foreach ( $this->get_json_files_for_content_types( $content_types ) as $json_file ) {
			$post = $this->get_json( $json_file );
	
			$links[ $post['link'] ] = $this->get_link_urls_in_content( $post['content']['rendered'] );
		}
	
		return $links;
	}

	public function get_url_status( array $urls ): array {
		$responses = [];
	
		foreach ( $urls as $url ) {
			$response = [
				'url' => $url,
				'status' => null,
				'redirect' => null,
			];

			try {
				$meta = $this->fetch_url_with_cache( $url );

				$response['status'] = $meta['status'];
	
				if ( ! empty( $meta['headers']['location'] ) ) {
					$response['redirect'] = $meta['headers']['location'];
				}
			} catch ( RuntimeException $e ) {
				$response['status'] = sprintf( 'error: %s', $e->getMessage() );
			}
	
			$this->log( '%s %s', $response['status'], $response['url'] );
	
			$responses[ $url ] = $response;
		}
	
		return $responses;
	}

	public function sort_posts( array $posts_by_id, array $parent_ids, array $post_order ): array {
		$sort_fn = function( $a_id, $b_id ) use ( $parent_ids, $post_order ) {			
			$a_parent = $parent_ids[ $a_id ] ?? 0;
			$b_parent = $parent_ids[ $b_id ] ?? 0;
			
			// If one is a parent (0) and other isn't, parent goes first.
			if ( $a_parent === 0 && $b_parent !== 0 ) {
				return -1;
			} elseif ( $a_parent !== 0 && $b_parent === 0 ) {
				return 1;
			}
			
			// If they have different parents, sort by parent.
			if ( $a_parent !== $b_parent ) {
				// Check if either is child of the other.
				if ( $a_parent === $b_id ) {
					return 1; // B is parent of A.
				} elseif ( $b_parent === $a_id ) {
					return -1; // A is parent of B.
				}
				
				// Sort by parent weights
				$a_parent_weight = $post_order[ $a_parent ] ?? 0;
				$b_parent_weight = $post_order[ $b_parent ] ?? 0;

				return $a_parent_weight <=> $b_parent_weight;
			}
			
			// If same parent (including both being top-level), sort by weights
			$a_weight = $post_order[ $a_id ] ?? 0;
			$b_weight = $post_order[ $b_id ] ?? 0;

			return $a_weight <=> $b_weight;
		};
		
		uksort( $posts_by_id, $sort_fn );
		
		return $posts_by_id;
	}
}
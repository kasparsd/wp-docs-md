<?php

use League\HTMLToMarkdown\HtmlConverter;
use League\HTMLToMarkdown\Converter\TableConverter;
use WP_Docs_Parser\WP_API_Client;
use WP_Docs_Parser\WP_Docs;

require_once __DIR__ . '/vendor/autoload.php';

$cli_options = getopt( 
	'',
	[
		'update',
		'sitemaps',
		'content-links',
	] 
);

$markdowner = new HtmlConverter(
	[
		'strip_tags' => true,
		'header_style' => 'atx', // Use # instead of underlines for h1 and h2.
	]
);

// Convert HTML tables to Markdown tables.
$markdowner->getEnvironment()->addConverter( new TableConverter() );

$docs = new WP_Docs( $markdowner );

$wp_developer = new WP_API_Client( 
	'https://developer.wordpress.org', 
	__DIR__ . '/docs/source/developer.wordpress.org' 
);

$wp_developer->set_delay( 10 ); // Workaround for WP.org rate limiting.

$content_types = [
	'apis-handbook',
	'plugin-handbook',
	'theme-handbook',
	'blocks-handbook',
	'wpcs-handbook',
	'rest-api-handbook',
	'scf-handbook',
	'adv-admin-handbook',
	// 'wp-parser-function',
	// 'wp-parser-class',
	// 'wp-parser-hook',
	// 'wp-parser-method',
];

$handbooks_md = [];
foreach ( $content_types as $content_type ) {
	$content_md = [];
	$toc = [];
	
	// Collect for sorting.
	$post_parents = [];
	$post_order = [];

	if ( isset( $cli_options['update'] ) ) {
		$json_files = $wp_developer->get_from_rest_api( $content_type );
	} else {
		$json_files = $wp_developer->get_json_files_for_content_types( [ $content_type ] );
	}

	foreach ( $json_files as $json_file ) {
		$json = $wp_developer->get_json( $json_file );
		
		$post_parents[ $json['id'] ] = $json['parent'] ?? 0;
		$post_order[ $json['id'] ] = $json['menu_order'] ?? 0;

		$toc[ $json['id'] ] = sprintf( '- [%s](#%s)', $json['title']['rendered'], $docs->get_anchor_id_for_url( $json['link'] ) );
		$content_md[ $json['id'] ] = $docs->get_post_json_as_markdown( $json );
	}

	$toc = $wp_developer->sort_posts( $toc, $post_parents, $post_order );
	$content_md = $wp_developer->sort_posts( $content_md, $post_parents, $post_order );

	$handbooks_md[ $content_type ] = implode( 
		"\n\n",
		[
			'Table of Contents:',
			implode( "\n", $toc ),
			implode( "\n\n---\n\n", $content_md ),
		] 
	);

	file_put_contents(
		sprintf( '%s/docs/wp-%s.md', __DIR__, $content_type ), 
		$handbooks_md[ $content_type ]
	);
}

// Update the combined handbook file.
file_put_contents(
	sprintf( '%s/docs/wp-handbooks.md', __DIR__ ), 
	implode( "\n\n---\n\n", $handbooks_md )
);

if ( isset( $cli_options['content-links'] ) ) {
	foreach ( $content_types as $content_type ) {
		$links = $wp_developer->get_link_urls_in_content_types( [ $content_type ] );
		$wp_developer->save_json( sprintf( 'links/post-type-%s.json', $content_type ), $links );
	}
}

if ( isset( $cli_options['sitemaps'] ) ) {
	$sitemap_urls = $wp_developer->get_sitemap_urls();
	$wp_developer->save_json( 'sitemaps.json', $sitemap_urls );
}

/**
 * WordPress.org/documentation parser.
 * 
 * There seems to be only one content type `articles` for now.
 */
$wp_org = new WP_API_Client( 
	'https://wordpress.org/documentation', 
	__DIR__ . '/docs/source/wordpress.org' 
);

$wp_org->set_delay( 10 ); // Workaround for WP.org rate limiting.

$content_types = [
	'articles',
];

foreach ( $content_types as $content_type ) {
	$content_md = [];
	$toc = [];
	
	if ( isset( $cli_options['update'] ) ) {
		$json_files = $wp_org->get_from_rest_api( $content_type );
	} else {
		$json_files = $wp_org->get_json_files_for_content_types( [ $content_type ] );
	}

	// Collect for sorting.
	$post_parents = [];
	$post_order = [];

	foreach ( $json_files as $json_file ) {
		$json = $wp_org->get_json( $json_file );

		$post_parents[ $json['id'] ] = $json['parent'] ?? 0;
		$post_order[ $json['id'] ] = $json['menu_order'] ?? 0;

		$toc[ $json['id'] ] = sprintf( '- [%s](#%s)', $json['title']['rendered'], $docs->get_anchor_id_for_url( $json['link'] ) );
		$content_md[ $json['id'] ] = $docs->get_post_json_as_markdown( $json );
	}

	$toc = $wp_org->sort_posts( $toc, $post_parents, $post_order );
	$content_md = $wp_org->sort_posts( $content_md, $post_parents, $post_order );

	$content_md = implode( 
		"\n\n",
		[
			'Table of Contents:',
			implode( "\n", $toc ),
			implode( "\n\n---\n\n", $content_md ),
		] 
	);

	file_put_contents(
		sprintf( '%s/docs/wp-%s.md', __DIR__, $content_type ), 
		$content_md
	);
}

if ( isset( $cli_options['content-links'] ) ) {
	foreach ( $content_types as $content_type ) {
		$links = $wp_org->get_link_urls_in_content_types( [ $content_type ] );
		$wp_org->save_json( sprintf( 'links/post-type-%s.json', $content_type ), $links );
	}
}

if ( isset( $cli_options['sitemaps'] ) ) {
	$sitemap_urls = $wp_org->get_sitemap_urls();
	$wp_org->save_json( 'sitemaps.json', $sitemap_urls );
}

/**
 * WP-CLI documentation parser.
 */
$wp_cli = new WP_API_Client( 
	'https://make.wordpress.org/cli', 
	__DIR__ . '/docs/source/make.wordpress.org-cli' 
);

$wp_cli->set_delay( 10 ); // Workaround for WP.org rate limiting.

$content_types = [
	'handbook',
];

foreach ( $content_types as $content_type ) {
	$content_md = [];
	$toc = [];
	
	if ( isset( $cli_options['update'] ) ) {
		$json_files = $wp_cli->get_from_rest_api( $content_type );
	} else {
		$json_files = $wp_cli->get_json_files_for_content_types( [ $content_type ] );
	}

	// Collect for sorting.
	$post_parents = [];
	$post_order = [];

	foreach ( $json_files as $json_file ) {
		$json = $wp_cli->get_json( $json_file );

		// Skip development-only pages.
		if ( false !== strpos( $json['link'], '/behat-steps/' ) ) {
			continue;
		}

		$post_parents[ $json['id'] ] = $json['parent'] ?? 0;
		$post_order[ $json['id'] ] = $json['menu_order'] ?? 0;

		$toc[ $json['id'] ] = sprintf( '- [%s](#%s)', $json['title']['rendered'], $docs->get_anchor_id_for_url( $json['link'] ) );
		$content_md[ $json['id'] ] = $docs->get_post_json_as_markdown( $json );
	}

	$toc = $wp_cli->sort_posts( $toc, $post_parents, $post_order );
	$content_md = $wp_cli->sort_posts( $content_md, $post_parents, $post_order );

	$content_md = implode( 
		"\n\n",
		[
			'Table of Contents:',
			implode( "\n", $toc ),
			implode( "\n\n---\n\n", $content_md ),
		] 
	);

	file_put_contents(
		sprintf( '%s/docs/wp-cli-%s.md', __DIR__, $content_type ), 
		$content_md
	);
}

if ( isset( $cli_options['content-links'] ) ) {
	foreach ( $content_types as $content_type ) {
		$links = $wp_cli->get_link_urls_in_content_types( [ $content_type ] );
		$wp_cli->save_json( sprintf( 'links/post-type-%s.json', $content_type ), $links );
	}
}

if ( isset( $cli_options['sitemaps'] ) ) {
	$sitemap_urls = $wp_cli->get_sitemap_urls();
	$wp_org->save_json( 'sitemaps.json', $sitemap_urls );
}
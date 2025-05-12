<?php

use WP_Docs_Parser\WP_API_Client;

class WP_API_Client_Test extends \PHPUnit\Framework\TestCase {

	public function test_sort_posts_basic() {
		$client = new WP_API_Client( 'https://example.com' );

		// Mix-up keys as IDs but expect the correct order.
		$posts = [
			'top0' => 7,
			'top1' => 4,
			'- top1-child1' => 2,
			'-- top1-child1-child1' => 6,
			'-- top1-child1-child2' => 1,
			'top2' => 5,
			'- top2-child1' => 3,
			'- top2-child2' => 0,
		];

		$post_parents = [
			7 => 0,
			4 => 0,
			2 => 4,
			6 => 2,
			1 => 2,
			5 => 0,
			3 => 5,
			0 => 5,
		];
		
		$post_order = [
			7 => 0,
			4 => 5,
			1 => 10,
			5 => 20,
			3 => -1,
		];

		$sorted_posts = $client->sort_posts( array_flip( $posts ), $post_parents, $post_order );
	
		$this->assertEquals(
			array_keys( $posts ), 
			$sorted_posts 
		);
	}
}
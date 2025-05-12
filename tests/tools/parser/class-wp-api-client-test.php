<?php

use WP_Docs_Parser\WP_API_Client;

class WP_API_Client_Test extends \PHPUnit\Framework\TestCase {

	public function test_sort_posts_basic() {
		$client = new WP_API_Client( 'https://example.com' );

		// Mix-up keys as IDs but expect the correct order.
		$posts = [
			'top0' => 8,
			'top1' => 5,
			'- top1-child1' => 3,
			'-- top1-child1-child1' => 7,
			'-- top1-child1-child2' => 2,
			'top2' => 6,
			'- top2-child1' => 4,
			'- top2-child2' => 1,
		];

		$post_parents = [
			8 => 0,
			5 => 0,
			3 => 5,
			7 => 3,
			2 => 3,
			6 => 0,
			4 => 6,
			1 => 6,
		];
		
		$post_order = [
			8 => 0,
			5 => 5,
			2 => 10,
			6 => 20,
			4 => -1,
		];

		$sorted_posts = $client->sort_posts( array_flip( $posts ), $post_parents, $post_order );
	
		$this->assertEquals(
			array_keys( $posts ), 
			$sorted_posts 
		);
	}
}
<?php
/**
 * Register Post Types
 *
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Custom_Posts {
	use Singleton;

	protected function __construct() {

		// load class.
		$this->setup_hooks();
	}

	protected function setup_hooks() {
		/**
		 * Actions.
		 */
		add_action( 'init', [$this, 'custom_post_type'] );
	}
	
  public function custom_post_type() {
    register_post_type('Products',
      [
        'capability_type' => true,
        'map_meta_cap' => true,
        'show_in_rest' => true,
        'rewrite' => [
          'slug' => 'products'
        ],
        'supports' => ['title', 'editor', 'excerpt', 'thumbnail', 'comments'],
        'labels'      => [
          'name'          => 'Products',
          'singular_name' => 'Product',
          'add_new_item' => 'Add New Product',
          'edit_item' => 'Edit Event',
          'all_items' => 'All Products'
        ],
        'public'      => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-cart'
      ]
    );
    register_post_type('Notes',
      [
        'capability_type' => true,
        'map_meta_cap' => true,
        'show_in_rest' => true,
        'show_ui' => true,
        'rewrite' => [
          'slug' => 'notes'
        ],
        'supports' => ['title', 'editor', 'thumbnail', 'comments'],
        'labels'      => [
          'name'          => 'Notes',
          'singular_name' => 'Note',
          'add_new_item' => 'Add New Note',
          'edit_item' => 'Edit Note',
          'all_items' => 'All Notes'
        ],
        'public'      => false,
        'has_archive' => true,
        'menu_icon' => 'dashicons-welcome-write-blog'
      ]
    );
    register_post_type('like',
      [
        'show_ui' => true,
        'public'      => false,
        'supports' => ['title'],
        'labels'      => [
          'name'          => 'Likes',
          'singular_name' => 'Like',
          'add_new_item' => 'Add New Like',
          'edit_item' => 'Edit Like',
          'all_items' => 'All Likes'
        ],
        'has_archive' => true,
        'menu_icon' => 'dashicons-heart'
      ]
    );
  }
}

?>
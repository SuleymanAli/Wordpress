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
		add_action( 'init', [$this, 'wporg_custom_post_type'] );
	}
	
  public function wporg_custom_post_type() {
    register_post_type('Products',
      [
        'capability_type' => true,
        'map_meta_cap' => true,
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
  }
}

?>
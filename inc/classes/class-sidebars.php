<?php
/**
 * Theme Sidebars
 *
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Sidebars {
	use Singleton;

	protected function __construct() {
		$this->setup_hooks();
	}

	protected function setup_hooks()
  {
    add_action( 'widgets_init', [$this, 'register_sidebars'] );
  }

  public function register_sidebars()
  {
    register_sidebar( array(
      'name'          => __( 'Sidebar: First Section', 'textdomain' ),
      'id'            => 'sidebar-1',
      'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="widgettitle">',
      'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
      'name'          => __( 'Sidebar: Second Section', 'textdomain' ),
      'id'            => 'sidebar-2',
      'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="widgettitle">',
      'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
      'name'          => __( 'Sidebar: Third Section', 'textdomain' ),
      'id'            => 'sidebar-3',
      'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="widgettitle">',
      'after_title'   => '</h2>',
    ) );
  }
}
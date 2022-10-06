<?php
/**
 * Enqueue theme assets
 *
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Assets {
	use Singleton;

	protected function __construct() {

		// load class.
		$this->setup_hooks();
	}

	protected function setup_hooks() {

		/**
		 * Actions.
		 */
		add_action( 'wp_enqueue_scripts', [ $this, 'register_styles' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'register_scripts' ] );
		/**
		 * The 'enqueue_block_assets' hook includes styles and scripts both in editor and frontend,
		 * except when is_admin() is used to include them conditionally
		 */
		// add_action( 'enqueue_block_assets', [ $this, 'enqueue_editor_assets' ] );
	}

	public function register_styles() {
		// Register styles.
      $styleTracker = filemtime(get_template_directory( ) . '/style.css');
      // Styles
      wp_enqueue_style( 'fa', 	get_template_directory_uri( ) . '/assets/css/fontawesome-all.css', false,   '5.13.0' );
      wp_enqueue_style( 'bt', 	get_template_directory_uri( ) . '/assets/css/bootstrap.min.css', false,   '4.4.0' );
      wp_enqueue_style ( 'my_css', get_stylesheet_uri( ), ['bt'], $styleTracker);
	}

	public function register_scripts() {
     // Scripts
     $scriptTracker = filemtime(get_template_directory( ) . '/assets/js/main.js');
     wp_enqueue_script( 'bts', get_template_directory_uri( ) . '/assets/js/bootstrap.min.js', ['jquery'], '4.4.0', true);
     wp_enqueue_script( 'popper', get_template_directory_uri( ) . '/assets/js/popper.min.js', ['jquery'], '1.16.0', true);
     wp_enqueue_script( 'custom_js', get_template_directory_uri( ) . '/assets/js/main.js', ['bts'], $scriptTracker , true);
	}

}

?>
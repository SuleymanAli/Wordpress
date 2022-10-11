<?php
/**
 * Register Post Types
 *
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class User {
	use Singleton;

	protected function __construct() {

		// load class.
		$this->setup_hooks();
	}

	protected function setup_hooks() {
		/**
		 * Actions.
		 */
		add_action( 'admin_init', [$this, 'redirectSubscriber'] );
		add_action( 'wp_loaded', [$this, 'disableSubscriberBar'] );
		add_action( 'login_enqueue_scripts', [$this, 'loginCSS'] );
		add_filter( 'login_headerurl', [$this, 'headerUrl'] );
		add_filter( 'login_headertext', [$this, 'headerTitle'] );
	}
	
  public function redirectSubscriber() {
    $currentUser = wp_get_current_user();

    if(count($currentUser->roles) == 1 && $currentUser->roles[0] == 'subscriber') {
      wp_redirect(site_url('/'));
      exit;
    }
  }

  public function disableSubscriberBar() {
    $currentUser = wp_get_current_user();

    if(count($currentUser->roles) == 1 && $currentUser->roles[0] == 'subscriber') {
     show_admin_bar(false);
    }
  }

  public function loginCSS() {
  }
  public function headerUrl() {
    return esc_url(site_url('/'));
  }
  public function headerTitle() {
    // return bloginfo('name');
  }
}

?>
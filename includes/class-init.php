<?php
/**
 * Initialize the plugin
 *
 * @package    AF_Plugin
 * @subpackage Includes
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace AF_Plugin\Includes;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Get plugins path to check for active plugins.
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

/**
 * Begin the core functionality of the plugin.
 *
 * @since  1.0.0
 * @access public
 */
final class Init {

	/**
	 * Instance of the class
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object Returns the instance.
	 */
	public static function instance() {

		// Varialbe for the instance to be used outside the class.
		static $instance = null;

		if ( is_null( $instance ) ) {

			// Set variable for new instance.
			$instance = new self;

			// Get class dependencies.
			$instance->dependencies();

		}

		// Return the instance.
		return $instance;

	}

	/**
	 * Constructor method
	 *
	 * @since  1.0.0
	 * @access private
	 * @return self
	 */
	private function __construct() {

		// Remove the Draconian capital P filter.
		remove_filter( 'the_title', 'capital_P_dangit', 11 );
		remove_filter( 'the_content', 'capital_P_dangit', 11 );
		remove_filter( 'comment_text', 'capital_P_dangit', 31 );

		// Remove blog.
		add_action( 'admin_menu', [ $this, 'remove_default_post_type' ] );
		add_action( 'admin_bar_menu', [ $this, 'remove_default_post_type_menu_bar' ], 999 );
		add_action( 'wp_dashboard_setup', [ $this, 'remove_draft_widget' ], 999 );

	}

	/**
	 * Remove posts from admin menu
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function remove_default_post_type() {
		remove_menu_page( 'edit.php' );
	}

	/**
	 * Remove posts from admin toolbar
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function remove_default_post_type_menu_bar( $wp_admin_bar ) {
		$wp_admin_bar->remove_node( 'new-post' );
	}

	/**
	 * Remove post quick draft
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function remove_draft_widget(){
		remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function dependencies() {

		// Translation functionality.
		require_once AFP_PATH . 'includes/class-i18n.php';

		// Post types and taxonomies.
		require_once AFP_PATH . 'includes/post-types-taxes/class-post-type-tax.php';

		// Admin/backend functionality, scripts and styles.
		require_once AFP_PATH . 'admin/class-admin.php';

		// Frontend functionality, scripts and styles.
		require_once AFP_PATH . 'frontend/class-frontend.php';

		// Various media and media library functionality.
		require_once AFP_PATH . 'includes/media/class-media.php';

		// Remove comments.
		require_once AFP_PATH . 'includes/class-remove-comments.php';

	}

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function afp_init() {

	return Init::instance();

}

// Run an instance of the class.
afp_init();
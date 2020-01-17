<?php
/**
 * Remove all comment support.
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

class Remove_Comments {

	public function __construct() {

        add_action( 'init', [ $this, 'init_start' ] );
		// add_action( 'wp_head', [ $this, 'no_comments_css' ] );
		add_action( 'wp_meta', [ $this, 'no_comments_link_meta' ] );
		add_action( 'admin_menu', [ $this, 'no_discussion_options' ] );
		add_action( 'admin_bar_menu', [ $this, 'no_admin_bar_comments' ], 99 );
		add_action( 'get_comments_number', [ $this, 'comments_number_always_zero' ] );
		add_action( 'comments_template', [ $this, 'change_comments_template' ] );
        add_action( 'widgets_init', [ $this, 'remove_comments_widget' ], 0 );

	}

	public static function init_start() {

		$args = array( 'public' => true, '_builtin' => true );

		foreach ( apply_filters( 'hide_comments_post_types', get_post_types( $args ) ) as $post_type ) {
			if ( post_type_supports( $post_type, 'comments' ) )
				remove_post_type_support( $post_type, 'comments' );
        }

	}

	public static function no_comments_link_meta() {

		?>
		<style type="text/css">
			.widget_meta li:nth-child(4) {
				display: none;
			}
		</style>
		<?php
	}

	public static function no_discussion_options() {

		remove_menu_page( 'edit-comments.php' );
        	remove_submenu_page( 'options-general.php', 'options-discussion.php' );

	}

	public static function no_admin_bar_comments( $admin_bar ) {

		$admin_bar->remove_menu( 'comments' );
        return $admin_bar;

	}

	public static function comments_number_always_zero() {

        return 0;

	}

	public static function change_comments_template() {

		global $wp_query;

		$wp_query->comments = array();
		$wp_query->comments_by_type = array();
		$wp_query->comment_count = '0';
		$wp_query->post->comment_count = '0';
		$wp_query->post->comment_status = 'closed';
		$wp_query->queried_object->comment_count = '0';
		$wp_query->queried_object->comment_status = 'closed';

        return apply_filters( 'hide_comments_template_comments_path', plugin_dir_path( __FILE__ ) . 'temp-comments.php' );

	}

	public static function remove_comments_widget() {

		if ( function_exists( 'unregister_widget' ) ) {
			unregister_widget( 'WP_Widget_Recent_Comments' );
        }

	}

	public static function no_dashboard_comments_widget() {

        	remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'core' );

	}
}

$afp_remove_comments = new Remove_Comments;
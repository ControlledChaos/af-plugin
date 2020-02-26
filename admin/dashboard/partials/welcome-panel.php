<?php
/**
 * Custom dashboard panel output.
 *
 * Provided are several widget areas and hooks for adding content.
 * The `do_action` hooks are named and placed to be similar to the
 * before and after pseudoelements in CSS.
 *
 * @package    AF_Plugin
 * @subpackage Admin\Dashboard
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace AF_Plugin\Admin\Dashboard;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Get the current user name for the greeting.
$current_user = wp_get_current_user();
$user_name    = $current_user->display_name;
$contact_page = get_page_by_path( 'contact' );
$contact_id   = $contact_page->ID;
$bio_page     = get_page_by_path( 'bio' );
$bio_id       = $bio_page->ID;

?>

<div class="afp-dashboard-summary">
    <?php wp_dashboard_right_now(); ?>
</div>
<div class="afp-dashboard-post-managment">
    <header class="afp-dashboard-section-header">
        <h3><?php _e( 'Manage Your Projects', 'afp-plugin' ); ?></h3>
    </header>
    <ul class="afp-dashboard-actions">
		<li>
            <h4><?php _e( 'Media', 'afp-plugin' ); ?></h4>
            <div class="afp-dashboard-content-actions-icon front-icon"><span class="dashicons dashicons-format-image"></span></div>
            <p>
                <a href="<?php echo admin_url( 'media-new.php' ); ?>"><?php _e( 'Add New', 'afp-plugin' ); ?></a>
                <a href="<?php echo admin_url( 'upload.php' ); ?>"><?php _e( 'Manage', 'afp-plugin' ); ?></a>
            </p>
        </li>
        <li>
            <h4><?php _e( 'Film + TV', 'afp-plugin' ); ?></h4>
            <div class="afp-dashboard-post-type-actions-icon project-icon"><span class="dashicons dashicons-format-video"></span></div>
            <p>
                <a href="<?php echo admin_url( 'post-new.php?post_type=project' ); ?>"><?php _e( 'Add New', 'afp-plugin' ); ?></a>
                <a href="<?php echo admin_url( 'edit.php?post_type=project' ); ?>"><?php _e( 'View List', 'afp-plugin' ); ?></a>
            </p>
        </li>
        <li>
            <h4><?php _e( 'Press', 'afp-plugin' ); ?></h4>
            <div class="afp-dashboard-post-type-actions-icon press-icon"><span class="dashicons dashicons-megaphone"></span></div>
            <p>
                <a href="<?php echo admin_url( 'post-new.php?post_type=press' ); ?>"><?php _e( 'Add New', 'afp-plugin' ); ?></a>
                <a href="<?php echo admin_url( 'edit.php?post_type=press' ); ?>"><?php _e( 'View List', 'afp-plugin' ); ?></a>
            </p>
        </li>
        <li>
            <h4><?php _e( 'Galleries', 'afp-plugin' ); ?></h4>
            <div class="afp-dashboard-post-type-actions-icon galleries-icon"><span class="dashicons dashicons-format-gallery"></span></div>
            <p>
                <a href="<?php echo admin_url( 'post-new.php?post_type=gallery' ); ?>"><?php _e( 'Add New', 'afp-plugin' ); ?></a>
                <a href="<?php echo admin_url( 'edit.php?post_type=gallery' ); ?>"><?php _e( 'View List', 'afp-plugin' ); ?></a>
            </p>
        </li>
    </ul>
</div>
<div class="afp-dashboard-managment">
    <header class="afp-dashboard-section-header">
        <h3><?php _e( 'Manage Your Pages', 'afp-plugin' ); ?></h3>
    </header>
    <ul class="afp-dashboard-actions">
        <li>
            <h4><?php _e( 'Front Page', 'afp-plugin' ); ?></h4>
            <div class="afp-dashboard-content-actions-icon front-icon"><span class="dashicons dashicons-admin-home"></span></div>
            <p>
                <a href="<?php echo admin_url( 'post.php?post=' . get_option( 'page_on_front' ) . '&action=edit' ); ?>"><?php _e( 'Manage Content', 'afp-plugin' ); ?></a>
            </p>
		</li>
		<li>
            <h4><?php _e( 'Bio', 'afp-plugin' ); ?></h4>
            <div class="afp-dashboard-content-actions-icon bio-icon"><span class="dashicons dashicons-id-alt"></span></div>
            <p>
                <a href="<?php echo admin_url( 'post.php?post=' . $bio_id . '&action=edit' ); ?>"><?php _e( 'Manage Bio', 'afp-plugin' ); ?></a>
            </p>
        </li>
        <li>
            <h4><?php _e( 'Contact', 'afp-plugin' ); ?></h4>
            <div class="afp-dashboard-content-actions-icon contact-icon"><span class="dashicons dashicons-email"></span></div>
            <p>
                <a href="<?php echo admin_url( 'post.php?post=' . $contact_id . '&action=edit' ); ?>"><?php _e( 'Manage Info', 'afp-plugin' ); ?></a>
            </p>
        </li>
    </ul>
</div>
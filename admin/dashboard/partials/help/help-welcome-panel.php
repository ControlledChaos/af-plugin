<?php
/**
 * Content for the Welcome Panel help tab.
 *
 * Uses the universal slug partial for admin pages. Set this
 * slug in the core plugin file.
 *
 * @package    AF_Plugin
 * @subpackage Admin\Partials\Help
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 *
 * @todo       Change this content when the custom welcome
 *             panel is ready to use.
 */

namespace AF_Plugin\Admin\Dashboard\Partials\Help;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} ?>
<h3><?php _e( 'Welcome Panel', 'af-plugin' ); ?></h3>
<p><?php _e( 'A custom, widgetized welcome panel is coming soon.', 'af-plugin' ); ?></p>
<?php
echo sprintf(
	'<p>%1s <a href="%2s">%3s</a> %4s</p>',
	__( 'View options on the', 'af-plugin' ),
	esc_url( 'http://localhost/controlledchaos/wp-admin/index.php?page=' . AFP_ADMIN_SLUG . '-settings' ),
	__( 'Dashboard Settings', 'af-plugin' ),
	__( 'page.', 'af-plugin' )
); ?>
<?php
/**
 * Admin header template.
 *
 * @package    AF_Plugin
 * @subpackage Admin\Partials
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace AF_Plugin\Admin\Partials;

// Restrict direct access
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Admin header variables.
 *
 * @since 1.0.0
 */

// Get the site title.
$title       = get_bloginfo( 'name' );

// Get the site tagline.
$description = get_bloginfo( 'description' );

// Return null if no site title.
if ( ! empty( $title ) ) {
    $title = get_bloginfo( 'name' );
} else {
    $title = null;
}

// Return a reminder if no site tagline.
if ( ! empty( $description ) ) {
    $description = get_bloginfo( 'description' );
} else {
    $description = null;
}

?>
<?php do_action( 'afp_before_admin_header' ); ?>
<header class="afp-admin-header">
    <?php do_action( 'afp_before_admin_site_branding' ); ?>
    <div class="site-branding admin-site-branding">
        <p class="site-title admin-site-title" itemprop="name"><a href="<?php echo admin_url(); ?>"><?php echo $title; ?></a></p>
        <p class="site-description admin-site-description"><?php echo $description; ?></p>
    </div>
    <?php do_action( 'afp_after_admin_site_branding' ); ?>
    <?php do_action( 'afp_before_admin_navigation' ); ?>
    <nav class="admin-navigation">
        <?php wp_nav_menu(
            array(
                'theme_location'  => 'admin-header',
                'container'       => false,
                'menu_id'         => 'admin-navigation-list',
                'menu_class'      => 'admin-navigation-list',
                'before'          => '',
                'after'           => '',
                'fallback_cb'     => ''
            )
        ); ?>
    </nav>
    <?php do_action( 'afp_after_admin_navigation' ); ?>
</header>
<?php do_action( 'afp_after_admin_header' ); ?>
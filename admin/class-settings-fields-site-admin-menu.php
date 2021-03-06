<?php
/**
 * Settings for the Admin Menu tab on the Site Settings page.
 *
 * @package    AF_Plugin
 * @subpackage Admin
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace AF_Plugin\Admin;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Settings for the Admin Menu tab.
 *
 * @since  1.0.0
 * @access public
 */
class Settings_Fields_Site_Admin_Menu {

	/**
	 * Holds the values to be used in the fields callbacks.
	 *
	 * @var array
	 */
	private $options;

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

			// Require the class files.
			$instance->dependencies();

		}

		// Return the instance.
		return $instance;

	}

	/**
	 * Constructor method
	 *
	 * @since  1.0.0
	 * @access public
	 * @return self
	 */
    public function __construct() {

		// Register settings sections and fields.
		add_action( 'admin_init', [ $this, 'settings' ] );

	}

	/**
	 * Class dependency files.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function dependencies() {

		// Callbacks for the Admin Menu tab.
		require AFP_PATH . 'admin/partials/field-callbacks/class-admin-menu-callbacks.php';

	}

	/**
	 * Plugin site settings.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 *
	 * @link  https://codex.wordpress.org/Settings_API
	 */
	public function settings() {

		// Admin menu settings section.
		add_settings_section(
			'afp-site-admin-menu',
			__( 'Admin Menu Settings', 'af-plugin' ),
			[],
			'afp-site-admin-menu'
		);

		// Site Settings page position.
		add_settings_field(
			'afp_site_settings_position',
			__( 'Site Settings Position', 'af-plugin' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'site_settings_position' ],
			'afp-site-admin-menu',
			'afp-site-admin-menu',
			[ esc_html__( 'Make this settings page a top-level link and hide other settings links.', 'af-plugin' ) ]
		);

		register_setting(
			'afp-site-admin-menu',
			'afp_site_settings_position'
		);

		// Site Settings page link label.
		add_settings_field(
			'afp_site_settings_link_label',
			__( 'Site Settings Label', 'af-plugin' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'site_settings_link_label' ],
			'afp-site-admin-menu',
			'afp-site-admin-menu',
			[ esc_html__( 'Change the label of the link to this page', 'af-plugin' ) ]
		);

		register_setting(
			'afp-site-admin-menu',
			'afp_site_settings_link_label'
		);

		// Site Settings page link icon if set to top level.
		add_settings_field(
			'afp_site_settings_link_icon',
			__( 'Site Settings Icon', 'af-plugin' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'site_settings_link_icon' ],
			'afp-site-admin-menu',
			'afp-site-admin-menu',
			[ esc_html__( 'Enter a Dashicons CSS class for the icon of the link to this page', 'af-plugin' ) ]
		);

		register_setting(
			'afp-site-admin-menu',
			'afp_site_settings_link_icon'
		);

		// Site Plugin page position.
		add_settings_field(
			'afp_site_plugin_link_position',
			__( 'Site Plugin Position', 'af-plugin' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'site_plugin_position' ],
			'afp-site-admin-menu',
			'afp-site-admin-menu',
			[ esc_html__( 'Make the site-specific plugin admin page a top-level link.', 'af-plugin' ) ]
		);

		register_setting(
			'afp-site-admin-menu',
			'afp_site_plugin_link_position'
		);

		// Site Plugin page link label.
		add_settings_field(
			'afp_site_plugin_link_label',
			__( 'Site Plugin Label', 'af-plugin' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'site_plugin_link_label' ],
			'afp-site-admin-menu',
			'afp-site-admin-menu',
			[ esc_html__( 'Change the label of the link to the site-specific plugin page', 'af-plugin' ) ]
		);

		register_setting(
			'afp-site-admin-menu',
			'afp_site_plugin_link_label'
		);

		// Site Plugin page link icon if set to top level.
		add_settings_field(
			'afp_site_plugin_link_icon',
			__( 'Site Plugin Icon', 'af-plugin' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'site_plugin_link_icon' ],
			'afp-site-admin-menu',
			'afp-site-admin-menu',
			[ esc_html__( 'Enter a Dashicons CSS class for the icon of the link to the site-specific plugin page', 'af-plugin' ) ]
		);

		register_setting(
			'afp-site-admin-menu',
			'afp_site_plugin_link_icon'
		);

		// Menus link position.
		add_settings_field(
			'afp_menus_position',
			__( 'Menus Position', 'af-plugin' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'menus_position' ],
			'afp-site-admin-menu',
			'afp-site-admin-menu',
			[ esc_html__( 'Make Menus a top-level link', 'af-plugin' ) ]
		);

		register_setting(
			'afp-site-admin-menu',
			'afp_menus_position'
		);

		// Widgets link position.
		add_settings_field(
			'afp_widgets_position',
			__( 'Widgets Position', 'af-plugin' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'widgets_position' ],
			'afp-site-admin-menu',
			'afp-site-admin-menu',
			[ esc_html__( 'Make Widgets a top-level link', 'af-plugin' ) ]
		);

		register_setting(
			'afp-site-admin-menu',
			'afp_widgets_position'
		);

		// Hide Appearance link.
		add_settings_field(
			'afp_hide_appearance',
			__( 'Hide Appearance', 'af-plugin' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'hide_appearance' ],
			'afp-site-admin-menu',
			'afp-site-admin-menu',
			[ esc_html__( 'Hide the Appearance link in the admin menu', 'af-plugin' ) ]
		);

		register_setting(
			'afp-site-admin-menu',
			'afp_hide_appearance'
		);

		// Hide Plugins link.
		add_settings_field(
			'afp_hide_plugins',
			__( 'Hide Plugins', 'af-plugin' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'hide_plugins' ],
			'afp-site-admin-menu',
			'afp-site-admin-menu',
			[ esc_html__( 'Hide the Plugins link in the admin menu', 'af-plugin' ) ]
		);

		register_setting(
			'afp-site-admin-menu',
			'afp_hide_plugins'
		);

		// Hide Users link.
		add_settings_field(
			'afp_hide_users',
			__( 'Hide Users', 'af-plugin' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'hide_users' ],
			'afp-site-admin-menu',
			'afp-site-admin-menu',
			[ esc_html__( 'Hide the Users link in the admin menu', 'af-plugin' ) ]
		);

		register_setting(
			'afp-site-admin-menu',
			'afp_hide_users'
		);

		// Hide Tools link.
		add_settings_field(
			'afp_hide_tools',
			__( 'Hide Tools', 'af-plugin' ),
			[ Partials\Field_Callbacks\Admin_Menu_Callbacks::instance(), 'hide_tools' ],
			'afp-site-admin-menu',
			'afp-site-admin-menu',
			[ esc_html__( 'Hide the Tools link in the admin menu', 'af-plugin' ) ]
		);

		register_setting(
			'afp-site-admin-menu',
			'afp_hide_tools'
		);

	}

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function afp_settings_fields_site_admin_menu() {

	return Settings_Fields_Site_Admin_Menu::instance();

}

// Run an instance of the class.
afp_settings_fields_site_admin_menu();
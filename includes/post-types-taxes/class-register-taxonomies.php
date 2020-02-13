<?php
/**
 * Register types.
 *
 * @package    AF_Plugin
 * @subpackage Includes\Post_Types_Taxes
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 *
 * @link       https://codex.wordpress.org/Function_Reference/register_taxonomy
 */

namespace AF_Plugin\Includes\Post_Types_Taxes;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Register types.
 *
 * @since  1.0.0
 * @access public
 */
final class Taxes_Register {

    /**
	 * Constructor magic method.
     *
     * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {

        // Register custom types.
		add_action( 'init', [ $this, 'register' ] );

	}

    /**
     * Register custom types.
     *
     * @since  1.0.0
	 * @access public
	 * @return void
     */
    public function register() {

        /**
         * Project Types
         */

        $labels = [
            'name'                       => __( 'Types', 'af-plugin' ),
            'singular_name'              => __( 'Type', 'af-plugin' ),
            'menu_name'                  => __( 'Project Types', 'af-plugin' ),
            'all_items'                  => __( 'All Types', 'af-plugin' ),
            'edit_item'                  => __( 'Edit Type', 'af-plugin' ),
            'view_item'                  => __( 'View Type', 'af-plugin' ),
            'update_item'                => __( 'Update Type', 'af-plugin' ),
            'add_new_item'               => __( 'Add New Type', 'af-plugin' ),
            'new_item_name'              => __( 'New Type', 'af-plugin' ),
            'parent_item'                => __( 'Parent Type', 'af-plugin' ),
            'parent_item_colon'          => __( 'Parent Type', 'af-plugin' ),
            'popular_items'              => __( 'Popular Types', 'af-plugin' ),
            'separate_items_with_commas' => __( 'Separate Types with commas', 'af-plugin' ),
            'add_or_remove_items'        => __( 'Add or Remove Types', 'af-plugin' ),
            'choose_from_most_used'      => __( 'Choose from the most used Types', 'af-plugin' ),
            'not_found'                  => __( 'No Types Found', 'af-plugin' ),
            'no_terms'                   => __( 'No Types', 'af-plugin' ),
            'items_list_navigation'      => __( 'Types List Navigation', 'af-plugin' ),
            'items_list'                 => __( 'Types List', 'af-plugin' )
        ];

        $options = [
            'label'                 => __( 'Types', 'af-plugin' ),
            'labels'                => $labels,
            'public'                => true,
            'hierarchical'          => false,
            'label'                 => 'Types',
            'show_ui'               => true,
            'show_in_menu'          => true,
            'show_in_nav_menus'     => true,
            'query_var'             => true,
            'rewrite'               => [
                'slug'         => 'types',
                'with_front'   => true,
                'hierarchical' => false,
            ],
            'show_admin_column'     => true,
            'show_in_rest'          => false,
			'rest_base'             => 'types',
			'rest_controller_class' => 'WP_REST_Terms_Controller',
            'show_in_quick_edit'    => true
        ];

        // Register the taxonomy.
        register_taxonomy(
            'project_type',
            [
				'project',
				'gallery'
            ],
            $options
        );

    }

}

// Run the class.
$afp_taxes = new Taxes_Register;
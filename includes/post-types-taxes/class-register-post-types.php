<?php
/**
 * Register post types.
 *
 * @package    AF_Plugin
 * @subpackage Includes\Post_Types_Taxes
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 *
 * @link       https://codex.wordpress.org/Function_Reference/register_post_type
 */

namespace AF_Plugin\Includes\Post_Types_Taxes;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Register post types.
 *
 * @since  1.0.0
 * @access public
 */
final class Post_Types_Register {

    /**
	 * Constructor magic method.
     *
     * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {

        // Register project types.
		add_action( 'init', [ $this, 'register' ] );

	}

    /**
     * Register project types.
     *
     * Note for WordPress 5.0 or greater:
     * If you want your post type to adopt the block edit_form_image_editor
     * rather than using the classic editor then set `show_in_rest` to `true`.
     *
     * @since  1.0.0
	 * @access public
	 * @return void
     */
    public function register() {

        /**
         * Post Type: Projects
         */

        $labels = [
            'name'                  => __( 'Projects', 'af-plugin' ),
            'singular_name'         => __( 'Project', 'af-plugin' ),
            'menu_name'             => __( 'Projects', 'af-plugin' ),
            'all_items'             => __( 'Manage Projects', 'af-plugin' ),
            'add_new'               => __( 'Add New', 'af-plugin' ),
            'add_new_item'          => __( 'Add New Project', 'af-plugin' ),
            'edit_item'             => __( 'Edit Project', 'af-plugin' ),
            'new_item'              => __( 'New Project', 'af-plugin' ),
            'view_item'             => __( 'View Project', 'af-plugin' ),
            'view_items'            => __( 'View Projects', 'af-plugin' ),
            'search_items'          => __( 'Search Projects', 'af-plugin' ),
            'not_found'             => __( 'No Projects Found', 'af-plugin' ),
            'not_found_in_trash'    => __( 'No Projects Found in Trash', 'af-plugin' ),
            'parent_item_colon'     => __( 'Parent Project', 'af-plugin' ),
            'featured_image'        => __( 'Featured image for this project', 'af-plugin' ),
            'set_featured_image'    => __( 'Set featured image for this project', 'af-plugin' ),
            'remove_featured_image' => __( 'Remove featured image for this project', 'af-plugin' ),
            'use_featured_image'    => __( 'Use as featured image for this project', 'af-plugin' ),
            'archives'              => __( 'Project archives', 'af-plugin' ),
            'insert_into_item'      => __( 'Insert into Project', 'af-plugin' ),
            'uploaded_to_this_item' => __( 'Uploaded to this Project', 'af-plugin' ),
            'filter_items_list'     => __( 'Filter Projects', 'af-plugin' ),
            'items_list_navigation' => __( 'Projects list navigation', 'af-plugin' ),
            'items_list'            => __( 'Projects List', 'af-plugin' ),
            'attributes'            => __( 'Project Attributes', 'af-plugin' ),
            'parent_item_colon'     => __( 'Parent Project', 'af-plugin' ),
        ];

        // Apply a filter to labels for customization.
        $labels = apply_filters( 'project_labels', $labels );

        $options = [
            'label'               => __( 'Projects', 'af-plugin' ),
            'labels'              => $labels,
            'description'         => __( 'Custom post type description.', 'af-plugin' ),
            'public'              => true,
            'publicly_queryable'  => true,
            'show_ui'             => true,
            'show_in_rest'        => false,
            'rest_base'           => 'project_rest_api',
            'has_archive'         => true,
            'show_in_menu'        => true,
			'exclude_from_search' => false,
			// Sets user role levels, accepts array: 'capabilities'        => [],
            'capability_type'     => 'post',
            'map_meta_cap'        => true,
            'hierarchical'        => false,
            'rewrite'             => [
                'slug'       => 'projects',
                'with_front' => true
            ],
            'query_var'           => 'project',
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-archive',
            'supports'            => [
                'title',
                'thumbnail',
                'page-attributes'
            ],
            'taxonomies'          => [
                'project_type'
            ],
        ];

        // Apply a filter to arguments for customization.
        $options = apply_filters( 'project_args', $options );

        // Register the post type.
		register_post_type( 'project', $options );

		/**
         * Post Type: Galleries
         */

        $labels = [
            'name'                  => __( 'Galleries', 'af-plugin' ),
            'singular_name'         => __( 'Gallery', 'af-plugin' ),
            'menu_name'             => __( 'Galleries', 'af-plugin' ),
            'all_items'             => __( 'Manage Galleries', 'af-plugin' ),
            'add_new'               => __( 'Add New', 'af-plugin' ),
            'add_new_item'          => __( 'Add New Gallery', 'af-plugin' ),
            'edit_item'             => __( 'Edit Gallery', 'af-plugin' ),
            'new_item'              => __( 'New Gallery', 'af-plugin' ),
            'view_item'             => __( 'View Gallery', 'af-plugin' ),
            'view_items'            => __( 'View Galleries', 'af-plugin' ),
            'search_items'          => __( 'Search Galleries', 'af-plugin' ),
            'not_found'             => __( 'No Galleries Found', 'af-plugin' ),
            'not_found_in_trash'    => __( 'No Galleries Found in Trash', 'af-plugin' ),
            'parent_item_colon'     => __( 'Parent Gallery', 'af-plugin' ),
            'featured_image'        => __( 'Featured image for this gallery', 'af-plugin' ),
            'set_featured_image'    => __( 'Set featured image for this gallery', 'af-plugin' ),
            'remove_featured_image' => __( 'Remove featured image for this gallery', 'af-plugin' ),
            'use_featured_image'    => __( 'Use as featured image for this gallery', 'af-plugin' ),
            'archives'              => __( 'Gallery archives', 'af-plugin' ),
            'insert_into_item'      => __( 'Insert into Gallery', 'af-plugin' ),
            'uploaded_to_this_item' => __( 'Uploaded to this Gallery', 'af-plugin' ),
            'filter_items_list'     => __( 'Filter Galleries', 'af-plugin' ),
            'items_list_navigation' => __( 'Galleries list navigation', 'af-plugin' ),
            'items_list'            => __( 'Galleries List', 'af-plugin' ),
            'attributes'            => __( 'Gallery Attributes', 'af-plugin' ),
            'parent_item_colon'     => __( 'Parent Gallery', 'af-plugin' ),
        ];

        // Apply a filter to labels for customization.
        $labels = apply_filters( 'gallery_labels', $labels );

        $options = [
            'label'               => __( 'Galleries', 'af-plugin' ),
            'labels'              => $labels,
            'description'         => __( 'Custom post type description.', 'af-plugin' ),
            'public'              => true,
            'publicly_queryable'  => true,
            'show_ui'             => true,
            'show_in_rest'        => false,
            'rest_base'           => 'gallery_rest_api',
            'has_archive'         => true,
            'show_in_menu'        => true,
			'exclude_from_search' => false,
			// Sets user role levels, accepts array: 'capabilities'        => [],
            'capability_type'     => 'post',
            'map_meta_cap'        => true,
            'hierarchical'        => false,
            'rewrite'             => [
                'slug'       => 'gallery',
                'with_front' => true
            ],
            'query_var'           => 'gallery',
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-format-gallery',
            'supports'            => [
                'title',
                'editor',
                'thumbnail',
                'excerpt',
                'page-attributes'
            ],
            'taxonomies'          => [
                'project_type'
            ],
        ];

        // Apply a filter to arguments for customization.
        $options = apply_filters( 'gallery_args', $options );

        // Register the post type.
        register_post_type( 'gallery', $options );

		/**
         * Post Type: Press
         */

        $labels = [
            'name'                  => __( 'Press', 'af-plugin' ),
            'singular_name'         => __( 'Press Article', 'af-plugin' ),
            'menu_name'             => __( 'Press', 'af-plugin' ),
            'all_items'             => __( 'Manage Articles', 'af-plugin' ),
            'add_new'               => __( 'Add New', 'af-plugin' ),
            'add_new_item'          => __( 'Add New Article', 'af-plugin' ),
            'edit_item'             => __( 'Edit Article', 'af-plugin' ),
            'new_item'              => __( 'New Article', 'af-plugin' ),
            'view_item'             => __( 'View Article', 'af-plugin' ),
            'view_items'            => __( 'View Articles', 'af-plugin' ),
            'search_items'          => __( 'Search Articles', 'af-plugin' ),
            'not_found'             => __( 'No Articles Found', 'af-plugin' ),
            'not_found_in_trash'    => __( 'No Articles Found in Trash', 'af-plugin' ),
            'parent_item_colon'     => __( 'Parent Article', 'af-plugin' ),
            'featured_image'        => __( 'Featured image for this article', 'af-plugin' ),
            'set_featured_image'    => __( 'Set featured image for this article', 'af-plugin' ),
            'remove_featured_image' => __( 'Remove featured image for this article', 'af-plugin' ),
            'use_featured_image'    => __( 'Use as featured image for this article', 'af-plugin' ),
            'archives'              => __( 'Article archives', 'af-plugin' ),
            'insert_into_item'      => __( 'Insert into Article', 'af-plugin' ),
            'uploaded_to_this_item' => __( 'Uploaded to this Article', 'af-plugin' ),
            'filter_items_list'     => __( 'Filter Articles', 'af-plugin' ),
            'items_list_navigation' => __( 'Articles list navigation', 'af-plugin' ),
            'items_list'            => __( 'Articles List', 'af-plugin' ),
            'attributes'            => __( 'Article Attributes', 'af-plugin' ),
            'parent_item_colon'     => __( 'Parent Article', 'af-plugin' ),
        ];

        // Apply a filter to labels for customization.
        $labels = apply_filters( 'press_labels', $labels );

        $options = [
            'label'               => __( 'Articles', 'af-plugin' ),
            'labels'              => $labels,
            'description'         => __( 'Custom post type description.', 'af-plugin' ),
            'public'              => true,
            'publicly_queryable'  => true,
            'show_ui'             => true,
            'show_in_rest'        => false,
            'rest_base'           => 'press_rest_api',
            'has_archive'         => true,
            'show_in_menu'        => true,
			'exclude_from_search' => false,
			// Sets user role levels, accepts array: 'capabilities'        => [],
            'capability_type'     => 'post',
            'map_meta_cap'        => true,
            'hierarchical'        => false,
            'rewrite'             => [
                'slug'       => 'press',
                'with_front' => true
            ],
            'query_var'           => 'press',
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-megaphone',
            'supports'            => [
                'title',
				'thumbnail',
				'excerpt',
                'page-attributes'
            ],
            'taxonomies'          => [],
        ];

        // Apply a filter to arguments for customization.
        $options = apply_filters( 'press_args', $options );

        // Register the post type.
        register_post_type( 'press', $options );

		/**
         * Post Type: Illustrations
         */

        $labels = [
            'name'                  => __( 'Illustrations', 'af-plugin' ),
            'singular_name'         => __( 'Illustration', 'af-plugin' ),
            'menu_name'             => __( 'Illustrations', 'af-plugin' ),
            'all_items'             => __( 'Manage Illustrations', 'af-plugin' ),
            'add_new'               => __( 'Add New', 'af-plugin' ),
            'add_new_item'          => __( 'Add New Illustration', 'af-plugin' ),
            'edit_item'             => __( 'Edit Illustration', 'af-plugin' ),
            'new_item'              => __( 'New Illustration', 'af-plugin' ),
            'view_item'             => __( 'View Illustration', 'af-plugin' ),
            'view_items'            => __( 'View Illustrations', 'af-plugin' ),
            'search_items'          => __( 'Search Illustrations', 'af-plugin' ),
            'not_found'             => __( 'No Illustrations Found', 'af-plugin' ),
            'not_found_in_trash'    => __( 'No Illustrations Found in Trash', 'af-plugin' ),
            'parent_item_colon'     => __( 'Parent Illustration', 'af-plugin' ),
            'featured_image'        => __( 'Featured image for this illustration', 'af-plugin' ),
            'set_featured_image'    => __( 'Set featured image for this illustration', 'af-plugin' ),
            'remove_featured_image' => __( 'Remove featured image for this illustration', 'af-plugin' ),
            'use_featured_image'    => __( 'Use as featured image for this illustration', 'af-plugin' ),
            'archives'              => __( 'Illustration archives', 'af-plugin' ),
            'insert_into_item'      => __( 'Insert into Illustration', 'af-plugin' ),
            'uploaded_to_this_item' => __( 'Uploaded to this Illustration', 'af-plugin' ),
            'filter_items_list'     => __( 'Filter Illustrations', 'af-plugin' ),
            'items_list_navigation' => __( 'Illustrations list navigation', 'af-plugin' ),
            'items_list'            => __( 'Illustrations List', 'af-plugin' ),
            'attributes'            => __( 'Illustration Attributes', 'af-plugin' ),
            'parent_item_colon'     => __( 'Parent Illustration', 'af-plugin' ),
        ];

        // Apply a filter to labels for customization.
        $labels = apply_filters( 'artwork_labels', $labels );

        $options = [
            'label'               => __( 'Illustrations', 'af-plugin' ),
            'labels'              => $labels,
            'description'         => __( 'Custom post type description.', 'af-plugin' ),
            'public'              => true,
            'publicly_queryable'  => true,
            'show_ui'             => true,
            'show_in_rest'        => false,
            'rest_base'           => 'artwork_rest_api',
            'has_archive'         => true,
            'show_in_menu'        => true,
			'exclude_from_search' => false,
			// Sets user role levels, accepts array: 'capabilities'        => [],
            'capability_type'     => 'post',
            'map_meta_cap'        => true,
            'hierarchical'        => false,
            'rewrite'             => [
                'slug'       => 'artwork',
                'with_front' => true
            ],
            'query_var'           => 'artwork',
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-art',
            'supports'            => [
                'title',
                'editor',
                'thumbnail',
                'excerpt',
                'page-attributes'
            ],
            'taxonomies'          => [
                'category'
            ],
        ];

        // Apply a filter to arguments for customization.
        $options = apply_filters( 'artwork_args', $options );

        // Register the post type.
        // register_post_type( 'artwork', $options );

    }

}

// Run the class.
$afp_post_types = new Post_Types_Register;
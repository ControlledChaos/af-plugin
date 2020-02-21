<?php
/**
 * Gallery post type fields.
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
 * Gallery post type fields.
 */
class Gallery_Fields {

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since	   1.0.0
	 * @param      string    $af-plugin
	 * @param      string    $version
	 */
    public function __construct() {

        // Register fields.
    	$this->fields();

	}

	/**
	 * Register fields.
	 */
	public function fields() {

		if ( function_exists( 'acf_add_local_field_group' ) ) :

			acf_add_local_field_group( [
				'key'    => 'group_5e45ae7989f2d',
				'title'  => __( 'Galleries', 'af-plugin' ),
				'fields' => [
					[
						'key'               => 'field_5e45aedc10cb0',
						'label'             => __( 'Image Size', 'af-plugin' ),
						'name'              => 'gallery_size',
						'type'              => 'select',
						'instructions'      => __( 'Size of the images in the grid. This does not affect the full size images displayed when thumbnails are expanded.', 'af-plugin' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'acfe_permissions'  => '',
						'choices'           => [
							'thumbnail'         => __( 'Small Thumbnail', 'af-plugin' ),
							'large-thumbnail'   => __( 'Large Thumbnail', 'af-plugin' ),
							'x-large-thumbnail' => __( 'Extra Large Thumbnail', 'af-plugin' ),
							'medium'            => __( 'Medium', 'af-plugin' ),
							'video-thumbnail'   => __( 'HD Video', 'af-plugin' ),
						],
						'default_value'     => [
							0 => 'medium',
						],
						'allow_null'        => 0,
						'multiple'          => 0,
						'ui'                => 1,
						'ajax'              => 0,
						'return_format'     => 'value',
						'placeholder'       => __( '', 'af-plugin' ),
					],
					[
						'key'               => 'field_5e45ae9810caf',
						'label'             => __( 'Images', 'af-plugin' ),
						'name'              => 'gallery_images',
						'type'              => 'gallery',
						'instructions'      => __( '', 'af-plugin' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'return_format'     => 'array',
						'preview_size'      => 'thumbnail',
						'insert'            => 'append',
						'library'           => 'all',
						'min'               => '',
						'max'               => '',
						'min_width'         => '',
						'min_height'        => '',
						'min_size'          => '',
						'max_width'         => '',
						'max_height'        => '',
						'max_size'          => '',
						'mime_types'        => '',
					],
				],
				'location' => [
					[
						[
							'param'    => 'post_type',
							'operator' => '==',
							'value'    => 'gallery',
						],
					],
				],
				'menu_order'            => 0,
				'position'              => 'normal',
				'style'                 => 'seamless',
				'label_placement'       => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen'        => [
					0 => 'discussion',
					1 => 'comments',
					2 => 'revisions',
					3 => 'slug',
					4 => 'author',
					5 => 'format',
					6 => 'categories',
					7 => 'tags',
					8 => 'send-trackbacks',
				],
				'active'             => true,
				'description'        => __( '', 'af-plugin' ),
				'acfe_display_title' => '',
				'acfe_autosync'      => '',
				'acfe_permissions'   => '',
				'acfe_form'          => 0,
				'acfe_meta'          => '',
				'acfe_note'          => '',
			] );

		endif;

	}

}

// New instance of the class.
new Gallery_Fields;
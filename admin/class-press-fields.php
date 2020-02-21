<?php
/**
 * Press post type fields.
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
 * Press post type fields.
 */
class Press_Fields {

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
				'key'    => 'group_5e46198fce2a1',
				'title'  => __( 'Press', 'af-plugin' ),
				'fields' => [
					[
						'key'               => 'field_5e461c42a00f6',
						'label'             => __( 'Press Outlet Name', 'af-plugin' ),
						'name'              => 'press_outlet_name',
						'type'              => 'text',
						'instructions'      => __( '', 'af-plugin' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => __( '', 'af-plugin' ),
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => '',
					],
					[
						'key'               => 'field_5e461ce1bb710',
						'label'             => __( 'Media Logo', 'af-plugin' ),
						'name'              => 'press_outlet_logo',
						'type'              => 'image',
						'instructions'      => __( 'Add the logo of the press outlet.', 'af-plugin' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'acfe_permissions'  => '',
						'acfe_uploader'     => 'wp',
						'acfe_thumbnail'    => 0,
						'return_format'     => 'array',
						'preview_size'      => 'thumbnail',
						'library'           => 'all',
						'min_width'         => '',
						'min_height'        => '',
						'min_size'          => '',
						'max_width'         => '',
						'max_height'        => '',
						'max_size'          => '',
						'mime_types'        => '',
					],
					[
						'key'               => 'field_5e461c68a00f7',
						'label'             => __( 'Article Title', 'af-plugin' ),
						'name'              => 'press_article_title',
						'type'              => 'text',
						'instructions'      => __( '', 'af-plugin' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => __( '', 'af-plugin' ),
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => '',
					],
					[
						'key'               => 'field_5e461c7ca00f8',
						'label'             => __( 'Article Link', 'af-plugin' ),
						'name'              => 'press_article_url',
						'type'              => 'url',
						'instructions'      => __( '', 'af-plugin' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => __( '', 'af-plugin' ),
					],
					[
						'key'               => 'field_5e461c9aa00f9',
						'label'             => __( 'Article Summary', 'af-plugin' ),
						'name'              => 'press_article_summary',
						'type'              => 'textarea',
						'instructions'      => __( 'Paragraphs automatically added with line breaks.', 'af-plugin' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => __( '', 'af-plugin' ),
						'maxlength'         => '',
						'rows'              => '',
						'new_lines'         => 'wpautop',
					],
				],
				'location' => [
					[
						[
							'param'    => 'post_type',
							'operator' => '==',
							'value'    => 'press',
						],
					],
				],
				'menu_order'            => 0,
				'position'              => 'acf_after_title',
				'style'                 => 'seamless',
				'label_placement'       => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen'        => [
					0  => 'the_content',
					1  => 'excerpt',
					2  => 'discussion',
					3  => 'comments',
					4  => 'revisions',
					5  => 'slug',
					6  => 'author',
					7  => 'format',
					8  => 'categories',
					9  => 'tags',
					10 => 'send-trackbacks',
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
new Press_Fields;
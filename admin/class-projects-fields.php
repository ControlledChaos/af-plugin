<?php
/**
 * Project post type fields.
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
 * Project post type fields.
 */
class Projects_Fields {

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
				'key'    => 'group_5948b2c4ec0dd-2',
				'title'  => __( 'Projects', 'af-plugin' ),
				'fields' =>[
					[
						'key'               => 'field_5982561e5eb94',
						'label'             => __( 'Info', 'af-plugin' ),
						'name'              => '',
						'type'              => 'tab',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'placement'         => 'top',
						'endpoint'          => 0,
					],
					[
						'key'               => 'field_5dceeb578c44c',
						'label'             => __( 'Project Title', 'af-plugin' ),
						'name'              => 'project_title',
						'type'              => 'text',
						'instructions'      => __( 'This will be displayed to the public, unlike the administrative title above.', 'af-plugin' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => '',
					],
					[
						'key'               => 'field_5e483aa1319e0',
						'label'             => __( 'Client', 'af-plugin' ),
						'name'              => 'project_client',
						'type'              => 'text',
						'instructions'      => __( 'Name(s) of the production company or network.', 'af-plugin' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'acfe_permissions'  => '',
						'default_value'     => '',
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => '',
					],
					[
						'key'               => 'field_5948b2c4f2275',
						'label'             => __( 'Director', 'af-plugin' ),
						'name'              => 'project_director',
						'type'              => 'text',
						'instructions'      => __( 'Enter only the name of the director, if applicable.', 'af-plugin' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => '',
					],
					[
						'key'               => 'field_5948b4fe4177e',
						'label'             => __( 'IMDb Page', 'af-plugin' ),
						'name'              => 'project_imdb_page',
						'type'              => 'url',
						'instructions'      => __( 'Paste the URL (web address) of the main page on IMBd.', 'af-plugin' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => 'http://www.imdb.com/title/tt1234567/',
					],
					[
						'key'               => 'field_5948b699882a3',
						'label'             => __( 'Description', 'af-plugin' ),
						'name'              => 'project_description',
						'type'              => 'textarea',
						'instructions'      => __( 'Enter a brief description.', 'af-plugin' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => '',
						'maxlength'         => '',
						'rows'              => '',
						'new_lines'         => '',
					],
					[
						'key'               => 'field_5e483d21d0ca2',
						'label'             => __( 'Images', 'af-plugin' ),
						'name'              => '',
						'type'              => 'tab',
						'instructions'      => __( '', 'af-plugin' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'acfe_permissions'  => '',
						'placement'         => 'top',
						'endpoint'          => 0,
						'icon_class'        => '',
						'show_icon_only'    => 0,
					],
					[
						'key'               => 'field_5ddc4e64349e8',
						'label'             => __( 'Poster Image', 'af-plugin' ),
						'name'              => 'project_poster_image',
						'type'              => 'image',
						'instructions'      => __( 'The poster image uses a 2:3 aspect ratio, taller than wide. The minimum size is 426 pixels wide by 640 pixels high. Ideal is 853x1280 or greater.', 'af-plugin' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'return_format'     => 'array',
						'preview_size'      => 'poster-preview',
						'library'           => 'all',
						'min_width'         => 426,
						'min_height'        => 640,
						'min_size'          => '',
						'max_width'         => '',
						'max_height'        => '',
						'max_size'          => '',
						'mime_types'        => 'jpg, jpeg, png',
					],
					[
						'key'               => 'field_5e483d3195947',
						'label'             => __( 'Image Gallery', 'af-plugin' ),
						'name'              => 'project_gallery',
						'type'              => 'gallery',
						'instructions'      => __( '', 'af-plugin' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'acfe_permissions'  => '',
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
					[
						'key'               => 'field_5e484cd749e10',
						'label'             => __( 'Gallery Link', 'af-plugin' ),
						'name'              => 'project_gallery_link',
						'type'              => 'page_link',
						'instructions'      => __( 'Optional gallery page related to this project.', 'af-plugin' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper' => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'acfe_permissions'  => '',
						'post_type'         => [
							0 => 'gallery',
						],
						'taxonomy'          => '',
						'allow_null'        => 0,
						'allow_archives'    => 0,
						'multiple'          => 0,
					],
					[
						'key'               => 'field_598256325eb95',
						'label'             => __( 'Videos', 'af-plugin' ),
						'name'              => '',
						'type'              => 'tab',
						'instructions'      => '',
						'required'          => 1,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'placement'         => 'top',
						'endpoint'          => 0,
					],
					[
						'key'               => 'field_5e482f96e5494',
						'label'             => __( 'Video Requirements', 'af-plugin' ),
						'name'              => '',
						'type'              => 'message',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'acfe_permissions'  => '',
						'message'           => __( 'Video field are designed to work only with videos hosted on Vimeo. Use only the basic URL of the video, no full-screen URLs or embed code.', 'af-plugin' ),
						'new_lines'         => 'wpautop',
						'esc_html'          => 0,
					],
					[
						'key'               => 'field_5e48368887fa8',
						'label'             => __( 'Primary Video Title', 'af-plugin' ),
						'name'              => 'project_video_title',
						'type'              => 'text',
						'instructions'      => __( '', 'af-plugin' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'acfe_permissions'  => '',
						'default_value'     => '',
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => '',
					],
					[
						'key'               => 'field_5948b2c4f2479',
						'label'             => __( 'Primary Video URL', 'af-plugin' ),
						'name'              => 'project_vimeo_url',
						'type'              => 'url',
						'instructions'      => __( 'Enter the basic URL for the Vimeo video.', 'af-plugin' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => 'https://vimeo.com/123456789',
					],
					[
						'key'               => 'field_5e4829feeae2a',
						'label'             => __( 'Additional Videos', 'af-plugin' ),
						'name'              => 'project_additional_videos',
						'type'              => 'repeater',
						'instructions'      => __( '', 'af-plugin' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'acfe_permissions'  => '',
						'acfe_repeater_stylised_button' => 0,
						'collapsed'         => '',
						'min'               => 0,
						'max'               => 0,
						'layout'            => 'row',
						'button_label'      => __( 'Add Video', 'af-plugin' ),
						'sub_fields'        => [
							[
								'key'               => 'field_5e482a1beae2b',
								'label'             => __( 'Title', 'af-plugin' ),
								'name'              => 'project_addtional_video_title',
								'type'              => 'text',
								'instructions'      => __( '', 'af-plugin' ),
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper' => [
									'width' => '',
									'class' => '',
									'id'    => '',
								],
								'acfe_permissions'  => '',
								'default_value'     => '',
								'placeholder'       => '',
								'prepend'           => '',
								'append'            => '',
								'maxlength'         => '',
							],
							[
								'key'               => 'field_5e482a37eae2c',
								'label'             => __( 'URL', 'af-plugin' ),
								'name'              => 'project_addtional_vimeo_turl',
								'type'              => 'url',
								'instructions'      => __( '', 'af-plugin' ),
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper' => [
									'width' => '',
									'class' => '',
									'id'    => '',
								],
								'acfe_permissions'  => '',
								'default_value'     => '',
								'placeholder'       => '',
							],
						],
					],
				],
				'location' => [
					[
						[
							'param'    => 'post_type',
							'operator' => '==',
							'value'    => 'project',
						],
					]
				],
				'menu_order'            => 0,
				'position'              => 'acf_after_title',
				'style'                 => 'seamless',
				'label_placement'       => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen'        => [
					0  => 'the_content',
					1  => 'excerpt',
					2  => 'custom_fields',
					3  => 'discussion',
					4  => 'comments',
					5  => 'revisions',
					6  => 'slug',
					7  => 'author',
					8  => 'format',
					9  => 'page_attributes',
					10 => 'categories',
					11 => 'tags',
					12 => 'send-trackbacks',
					13 => 'featured_image'
				],
				'active'      => 1,
				'description' => __( 'For Projects post types.', 'af-plugin' ),
			] );

		endif;

	}

}

// New instance of the class.
new Projects_Fields;
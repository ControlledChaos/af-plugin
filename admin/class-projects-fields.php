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
	 * Get post type context
	 *
	 * @since  1.0.0
	 * @access public
	 * @return mixed
	 */
	public function get_current_post_type() {

		// Access global variables.
		global $post, $typenow, $current_screen;

		// Return the post type for various scenarios.
		if ( $post && $post->post_type ) {
			return $post->post_type;
		} elseif ( $typenow ) {
			return $typenow;
		} elseif ( $current_screen && $current_screen->post_type ) {
			return $current_screen->post_type;
		} elseif ( isset( $_REQUEST['post_type'] ) ) {
			return sanitize_key( $_REQUEST['post_type'] );
		}

		// Return nothing if conditions aren't met.
		return null;

	}

	/**
	 * Register fields.
	 */
	public function fields() {

		if ( function_exists( 'acf_add_local_field_group' ) ) :

			// Add the Director field for projects only.
			if ( 'project' == $this->get_current_post_type() ) {
				$director = [
					'key'               => 'field_5948b2c4f2275',
					'label'             => __( 'Director', 'af-plugin' ),
					'name'              => 'af_project_director',
					'type'              => 'text',
					'instructions'      => __( 'Enter only the name of the director.', 'af-plugin' ),
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
				];
			} else {
				$director = null;
			}

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
						'name'              => 'af_project_title',
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
					$director,
					[
						'key'               => 'field_5948b4fe4177e',
						'label'             => __( 'IMDb Page', 'af-plugin' ),
						'name'              => 'af_project_imdb_page',
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
						'name'              => 'af_project_description',
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
						'key'               => 'field_598256325eb95',
						'label'             => __( 'Media', 'af-plugin' ),
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
						'key'               => 'field_5ddc4e64349e8',
						'label'             => __( 'Poster Image', 'af-plugin' ),
						'name'              => 'af_poster_image',
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
						'key'               => 'field_5948b2c4f2479',
						'label'             => 'Vimeo Video URL',
						'name'              => 'af_project_vimeo_id',
						'type'              => 'url',
						'instructions'      => 'Enter the basic URL for the Vimeo video.',
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
						'key'               => 'field_5a34d017a35a7',
						'label'             => __( 'Video Image', 'af-plugin' ),
						'name'              => 'af_video_image',
						'type'              => 'image',
						'instructions'      => __( 'Optional. The video image uses a 16:9 aspect ratio, the same as HD video. If no image is selected then the screenshot from Vimeo will be used. This can be used to replace an inferior image provided by Vimeo. Minimum 960 X 540 pixels.', 'af-plugin' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'return_format'     => 'array',
						'preview_size'      => 'video-small',
						'library'           => 'all',
						'min_width'         => 960,
						'min_height'        => 540,
						'min_size'          => '',
						'max_width'         => '',
						'max_height'        => '',
						'max_size'          => '',
						'mime_types'        => 'jpg, jpeg, png',
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
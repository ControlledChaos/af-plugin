<?php
/**
 * Example Beaver Builder module
 *
 * @package    AF_Plugin
 * @subpackage Includes\Beaver
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Example Beaver Builder module
 *
 * @since  1.0.0
 * @access public
 */
class AFP_Example_Module extends FLBuilderModule {

    /**
	 * Constructor method
	 *
	 * @since  1.0.0
	 * @access public
	 * @return self
	 */
    public function __construct() {

        parent::__construct( [
            'name'          => __( 'Example', 'af-plugin' ),
            'description'   => __( 'An example for coding new modules.', 'af-plugin' ),
            'category'      => __( 'Example Modules', 'af-plugin' ),
            'dir'           => AFP_PATH . 'includes/beaver/modules/example/',
            'url'           => AFP_URL . 'includes/beaver/modules/example/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled'       => true, // Defaults to true and can be omitted.
        ] );

        /**
         * Use these methods to enqueue css and js already
         * registered or to register and enqueue your own.
         *
         * @since  1.0.0
         */

        // Already registered.
        $this->add_css( 'font-awesome' );
        $this->add_js( 'jquery-bxslider' );

        // Register and enqueue your own.
        $this->add_css('example-lib', $this->url . 'css/example-lib.css');
        $this->add_js('example-lib', $this->url . 'js/example-lib.js', [], '', true);

    }

    /**
     * Use this method to work with settings data before
     * it is saved. You must return the settings object.
     *
     * @since  1.0.0
	 * @access public
     * @param  $settings {object}
     * @return string
     */
    public function update( $settings ) {

        $settings->textarea_field .= __( ' - this text was appended in the update method.', 'af-plugin' );

        return $settings;

    }

    /**
     * Delete method
     *
     * This method will be called by the builder
     * right before the module is deleted.
     *
     * @since  1.0.0
	 * @access public
	 * @return void
     */
    public function delete() {}

    /**
     * Example method
     *
     * Add additional methods to this class for use in the
     * other module files such as preview.php, frontend.php
     * and frontend.css.php.
     *
     * @since  1.0.0
	 * @access public
	 * @return void
     */
    public function example_method() {}

}

/**
 * Register the module and its form settings.
 *
 * @since  1.0.0
 * @access public
 * @return array Returns the array of module fields.
 */
FLBuilder::register_module( 'AFP_Example_Module', [
    'general' => [ // Tab
        'title'    => __( 'General', 'af-plugin' ), // Tab title
        'sections' => [ // Tab Sections
            'general' => [ // Section
                'title'  => __( 'Section Title', 'af-plugin' ), // Section Title
                'fields' => [ // Section Fields
                    'text_field' => [
                        'type'        => 'text',
                        'label'       => __( 'Text Field', 'af-plugin' ),
                        'default'     => '',
                        'maxlength'   => '2',
                        'size'        => '3',
                        'placeholder' => '10',
                        'class'       => 'my-css-class',
                        'description' => 'px',
                        'help'        =>__( 'Put your help inf here.', 'af-plugin' ),
                        'preview'     => [
                            'type'     => 'css',
                            'selector' => '.fl-example-text',
                            'property' => 'font-size',
                            'unit'     => 'px'
                        ]
                    ],
                    'textarea_field' => [
                        'type'        => 'textarea',
                        'label'       => __( 'Textarea Field', 'af-plugin' ),
                        'default'     => '',
                        'placeholder' => __( 'Placeholder Text', 'af-plugin' ),
                        'rows'        => '6',
                        'preview'     => [
                            'type'     => 'text',
                            'selector' => '.fl-example-text'
                        ]
                    ],
                    'select_field' => [
                        'type'    => 'select',
                        'label'   => __( 'Select Field', 'af-plugin' ),
                        'default' => 'option-2',
                        'options' => [
                            'option-1' => __( 'Option 1', 'af-plugin' ),
                            'option-2' => __( 'Option 2', 'af-plugin' ),
                            'option-3' => __( 'Option 3', 'af-plugin' )
                        ]
                    ],
                    'color_field' => [
                        'type'       => 'color',
                        'label'      => __( 'Color Picker', 'af-plugin' ),
                        'default'    => '333333',
                        'show_reset' => true,
                        'preview'     => [
                            'type'     => 'css',
                            'selector' => '.fl-example-text',
                            'property' => 'color'
                        ]
                    ],
                    'photo_field' => [
                        'type'  => 'photo',
                        'label' => __( 'Photo Field', 'af-plugin' )
                    ],
                    'photos_field' => [
                        'type'  => 'multiple-photos',
                        'label' => __( 'Multiple Photos Field', 'af-plugin' )
                    ],
                    'video_field' => [
                        'type'  => 'video',
                        'label' => __( 'Video Field', 'af-plugin' )
                    ],
                    'icon_field' => [
                        'type'        => 'icon',
                        'label'       => __( 'Icon Field', 'af-plugin' ),
                        'show_remove' => true
                    ],
                    'link_field' => [
                        'type'  => 'link',
                        'label' => __( 'Link Field', 'af-plugin' )
                    ],
                    'form_field' => [
                        'type'         => 'form',
                        'label'        => __( 'Form Field', 'af-plugin' ),
                        'form'         => 'example_settings_form', // ID from registered form below
                        'preview_text' => 'example' // Name of a field to use for the preview text
                    ],
                    'suggest_field' => [
                        'type'   => 'suggest',
                        'label'  => __( 'Suggest Field', 'af-plugin' ),
                        'action' => 'fl_as_posts',
                        'data'   => 'post'
                    ],
                    'editor_field' => [
                        'type'          => 'editor',
                        'label'         => '',
                        'media_buttons' => true,
                        'rows'          => 10
                    ],
                    'custom_field_example' => [
                        'type'    => 'afp-custom-beaver-field',
                        'label'   => __( 'Custom Field Example', 'af-plugin' ),
                        'default' => ''
                    ],
                ]
            ]
        ]
    ],
    'toggle' => [ // Tab
        'title'    => __( 'Toggle', 'af-plugin' ), // Tab title
        'sections' => [ // Tab Sections
            'general' => [ // Section
                'title'  => __( 'Toggle Example', 'af-plugin' ), // Section Title
                'fields' => [ // Section Fields
                    'toggle_me' => [
                        'type'    => 'select',
                        'label'   => __( 'Toggle Me!', 'af-plugin' ),
                        'default' => 'option-1',
                        'options' => [
                            'option-1' => __( 'Option 1', 'af-plugin' ),
                            'option-2' => __( 'Option 2', 'af-plugin' )
                        ],
                        'toggle' => [
                            'option-1' => [
                                'fields'   => [
                                    'toggle_text',
                                    'toggle_text2'
                                ],
                                'sections' => [
                                    'toggle_section'
                                ]
                            ],
                            'option-2' => []
                        ]
                    ],
                    'toggle_text' => [
                        'type'        => 'text',
                        'label'       => __( 'Hide Me!', 'af-plugin' ),
                        'default'     => '',
                        'description' => 'I get hidden when you toggle the select above.'
                    ],
                    'toggle_text2' => [
                        'type'    => 'text',
                        'label'   => __( 'Me Too!', 'af-plugin' ),
                        'default' => ''
                    ]
                ]
            ],
            'toggle_section' => [ // Section
                'title'  => __( 'Hide This Section!', 'af-plugin' ), // Section Title
                'fields' => [ // Section Fields
                    'some_text' => [
                        'type'    => 'text',
                        'label'   => __( 'Text', 'af-plugin' ),
                        'default' => ''
                    ]
                ]
            ]
        ]
    ],
    'multiple' => [ // Tab
        'title'    => __( 'Multiple', 'af-plugin' ), // Tab title
        'sections' => [ // Tab Sections
            'general' => [ // Section
                'title'   => __( 'Multiple Example', 'af-plugin' ), // Section Title
                'fields'  => [ // Section Fields
                    'test' => [
                        'type'     => 'text',
                        'label'    => __( 'Multiple Test', 'af-plugin' ),
                        'multiple' => true // Doesn't work with editor or photo fields
                    ]
                ]
            ]
        ]
    ],
    'include' => [ // Tab
        'title' => __( 'Include', 'af-plugin' ), // Tab title
        'file'  => AFP_PATH . 'includes/beaver/example/includes/settings-example.php'
    ]
] );

/**
 * Register a settings form to use in the "form" field type above.
 */
FLBuilder::register_settings_form( 'example_settings_form', [
    'title' => __( 'Example Form Settings', 'af-plugin' ),
    'tabs'  => [
        'general' => [ // Tab
            'title'    => __( 'General', 'af-plugin' ), // Tab title
            'sections' => [ // Tab Sections
                'general' => [ // Section
                    'title'  => '', // Section Title
                    'fields' => [ // Section Fields
                        'example' => [
                            'type'    => 'text',
                            'label'   => __( 'Example', 'af-plugin' ),
                            'default' => __( 'Some example text', 'af-plugin' )
                        ]
                    ]
                ]
            ]
        ],
        'another' => [ // Tab
            'title'    => __( 'Another Tab', 'af-plugin' ), // Tab title
            'sections' => [ // Tab Sections
                'general' => [ // Section
                    'title'  => '', // Section Title
                    'fields' => [ // Section Fields
                        'another_example' => [
                            'type'  => 'text',
                            'label' => __( 'Another Example', 'af-plugin' )
                        ]
                    ]
                ]
            ]
        ]
    ]
] );
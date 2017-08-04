<?php

namespace WPPB;

class Shortcodes 
{  
    private static $instance;

    public static function init()
    {
        if( null === static::$instance ) 
        {
            static::$instance = new static();
        }
        return static::$instance;
    }

    private function __construct() 
    {
        /**
         * TinyMCE Button
         */
        \amarkal_register_shortcode(array(
            'id'        => 'my-alert', // ID must match shortcode tag (if using a shortcode)
            'title'     => 'My Alert',
            'cmd'       => 'my_alert_cmd',
            'height'    => 270,
            // 'template'  => "<p>[my-alert title=\"{{title}}\" type=\"{{type}}\"]{{content}}[/my-alert]</p>",
            'show_placeholder' => true,
            'placeholder_class' => 'my-alert-placeholder',
            'placeholder_icon' => PLUGIN_URL.'assets/img/amarkal.png',
            'placeholder_visible_field' => 'type',
            'fields'    => array(
                array(
                    'type'        => 'text',
                    'name'        => 'title',
                    'title'       => 'Title',
                    'description' => 'The alert\'s title',
                    'help'        => 'The alert\'s title',
                    'default'     => 'My title'
                ),
                array(
                    'type'        => 'select',
                    'name'        => 'type',
                    'title'       => 'Type',
                    'description' => 'The alert\'s type',
                    'help'        => 'The alert\'s type',
                    'default'     => 'notice',
                    'data'        => array(
                        'notice'     => 'Notice',
                        'error'      => 'Error',
                        'warning'    => 'Warning'
                    )
                ),
                array(
                    'type'        => 'textarea',
                    'name'        => 'contents',
                    'title'       => 'Content',
                    'description' => 'The alert\'s content',
                    'default'     => 'Some text'
                ),
                array(
                    'type'            => 'slider',
                    'title'           => 'Slider',
                    'description'     => 'The <code>slider</code> allows the user to select a numeric value within a range of values.',
                    'name'            => 'slider',
                    'min'             => 0,
                    'max'             => 20,
                    'default'         => 10
                )
            )
        ));

        \add_action( 'init', array( $this, 'add_tinymce_plugin' ) );
    }

    public function add_tinymce_plugin()
    {
        \add_filter( "mce_external_plugins", array( $this, "add_plugins" ) );
        \add_filter( 'mce_buttons', array( $this, 'register_buttons' ) );
    }

    public function add_plugins( $plugin_array )
    {
        $plugin_array['myplugin'] = PLUGIN_URL.'assets/js/tinymce.plugin.js';
        return $plugin_array;
    }

    public function register_buttons( $buttons )
    {
        array_push( $buttons, 'mybutton' );
        return $buttons;
    }
}
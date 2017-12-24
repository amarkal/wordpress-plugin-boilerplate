<?php 

namespace WPPB;

class Settings 
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
        // In order for the page links to work properly, this must go before
        // adding the settings page (due the a bug in the WordPress core)
        \add_action('admin_menu', array($this, 'add_menu_page'));
        \add_action('wp_ajax_my_button_callback', array($this, 'button_callback'));

        // Now that the menu page exists, we can add the settings page
        $this->add_settings_page();

        // Add a settings page with no sections to the Tools sidebar submenu
        $page = \amarkal_add_settings_page(array(
            'parent_slug'  => 'tools.php',
            'slug'         => 'toolsphp-child-page',
            'title'        => 'Tools.php Child Page',
            'menu_title'   => 'Amarkal settings'
        ));

        $page->add_field(array(
            'type'         => 'text',
            'title'        => 'Text Field',
            'description'  => 'The <code>text</code> field accepts any form of text',
            'name'         => 'my_tools_textfield',
            'placeholder'  => 'Enter text...',
            'default'      => '',
            'filter'       => 'sanitize_text_field'
        ));
    }

    public function add_menu_page()
    {
        \add_menu_page(
            'Amarkal Settings', 
            'Amarkal Settings', 
            'manage_options', 
            'my-settings-page', 
            null, // Create a child page with the parent_slug set to this page's slug
            'dashicons-admin-tools',
            10
        );
    }

    public function button_callback()
    {
        sleep(3);
        \wp_die();
    }

    private function add_settings_page() 
    {
        $config   = include __DIR__.'/Configs/Settings.config.php';
        $sections = $config['sections'];
        
        unset($config['sections']);
        $page = \amarkal_add_settings_page($config);

        foreach($sections as $section)
        {
            $fields = $section['fields'];
            unset($section['fields']);
            $page->add_section($section);

            foreach($fields as $field)
            {
                $field['section'] = $section['slug'];
                $page->add_field($field);
            }
        }
    }
}
<?php

namespace WPPB;

class Plugin 
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

    public function __construct() 
    {
        $this->generate_defines();
        
        Settings::init();
    }
    
    public function generate_defines()
    {
        define( __NAMESPACE__.'\PLUGIN_DIR', dirname( __FILE__ ) );
        define( __NAMESPACE__.'\PLUGIN_URL', \plugin_dir_url( __FILE__ ) );
        define( __NAMESPACE__.'\JS_URL', \plugin_dir_url( __FILE__ ).'assets/js' );
        define( __NAMESPACE__.'\CSS_URL', \plugin_dir_url( __FILE__ ).'assets/css' );
        define( __NAMESPACE__.'\IMG_URL', \plugin_dir_url( __FILE__ ).'assets/img' );
        define( __NAMESPACE__.'\PLUGIN_VERSION', '1.0.0' );
    }
}
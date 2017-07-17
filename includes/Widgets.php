<?php

namespace WPPB;

class Widgets 
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
        \add_action( 'widgets_init', array($this,'register_widgets') );
    }

    public function register_widgets() 
    {
        register_widget( '\WPPB\Widgets\MyCoolWidget' );
    }
}
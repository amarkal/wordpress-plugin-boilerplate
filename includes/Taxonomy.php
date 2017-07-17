<?php

namespace WPPB;

class Taxonomy 
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
        // Add a text field to the 'category' taxonomy 'add' & 'edit' forms:
        \amarkal_taxonomy_add_field('category', array(
            'name'        => 'cat_icon',
            'type'        => 'text',
            'title'       => 'Icon',
            'description' => 'The category\'s icon',
            'table'       => array(
                'show'      => true,  // Add a column to the terms table
                'sortable'  => true   // Make that column sortable
            )
        ));
    }
}
<?php 

namespace WPPB;

class MetaBox 
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
        // Add a metabox to the 'page' post type
        amarkal_add_meta_box('my_meta_box', array(
            'title'     => 'My Meta Box',
            'screen'    => 'page',
            'context'   => 'normal',
            'priority'  => 'default',
            'fields'    => array(
                array(
                    'type'            => 'text',
                    'title'           => 'Text Field',
                    'description'     => 'The <code>text</code> field accepts any form of text',
                    'help'            => 'This is a <code>help</code> tooltip that accepts HTML like <a href="#">links</a> and <strong>special stylig</strong>',
                    'name'            => 'my-textfield',
                    'id'              => 'my-textfield',
                    'disabled'        => false,
                    'readonly'        => false,
                    'placeholder'     => 'Enter text...',
                    'size'            => 40,
                    'required'        => false,
                    'default'         => null,
                    'filter'          => 'sanitize_text_field'
                ),
                array(
                    'type'            => 'number',
                    'title'           => 'Number Field',
                    'description'     => 'The <code>number</code> field accepts a numeric value.',
                    'help'            => 'You can also set min & max baundaries to <code>number</code> fields',
                    'name'            => 'my-numberfield',
                    'id'              => 'my-numberfield',
                    'disabled'        => false,
                    'readonly'        => false,
                    'placeholder'     => 'Enter number...',
                    'required'        => false,
                    'default'         => 5,
                    'max'             => 20
                )
            )
        ));
    }
}
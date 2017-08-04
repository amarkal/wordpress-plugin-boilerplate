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
                    'default'         => 'Some default text',
                    'filter'          => 'sanitize_text_field',
                    'validation'      => function($v,&$e) {
                        if(strlen($v) > 20) {
                            $e = 'Text Field must be less than 20 characters long';
                            return false;
                        }
                        return true;
                    }
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

        // Add a metabox to the 'page' post type
        amarkal_add_meta_box('my_meta_box_2', array(
            'title'     => 'My Meta Box',
            'screen'    => 'page',
            'context'   => 'normal',
            'priority'  => 'default',
            'fields'    => array(
                array(
                    'type'            => 'text',
                    'title'           => 'Text Field #2',
                    'name'            => 'my-textfield-2',
                    'placeholder'     => 'Enter text...',
                    'default'         => null
                ),
            )
        ));
    }
}
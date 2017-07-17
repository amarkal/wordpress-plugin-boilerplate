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
        amarkal_add_settings_page(array(
            'slug'         => 'my-settings-page',
            'menu_title'   => 'Amarkal Settings',
            'icon'         => 'dashicons-admin-tools'
        ));

        amarkal_add_settings_child_page(array(
            'parent_slug'  => 'my-settings-page',
            'slug'         => 'my-settings-page',
            'title'        => 'Components',
            'subtitle'     => 'Amarkal UI Components showcase',
            'menu_title'   => 'Components',
            'fields'       => array(
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
                ),
                array(
                    'type'            => 'textarea',
                    'title'           => 'Textarea',
                    'description'     => 'The <code>textarea</code> field accepts any form of text, including special characters like new lines.',
                    'name'            => 'my-textarea',
                    'default'         => 'Default text'
                ),
                array(
                    'type'            => 'checkbox',
                    'title'           => 'Checkbox',
                    'description'     => 'The <code>checkbox</code> field lets the user select one or more options from a set of alternatives.',
                    'name'            => 'my-checkbox',
                    'data'            => array(
                        'key1'  => 'Value 1',
                        'key2'  => 'Value 2',
                        'key3'  => 'Value 3'
                    ),
                    'default'         => array('key1','key2')
                ),
                array(
                    'type'            => 'radio',
                    'title'           => 'Radio',
                    'description'     => 'The <code>radio</code> field lets the user select one and only one option from a set of alternatives.',
                    'name'            => 'my-radio',
                    'data'            => array(
                        'key1'  => 'Value 1',
                        'key2'  => 'Value 2',
                        'key3'  => 'Value 3'
                    ),
                    'default'         => 'key2'
                ),
                array(
                    'type'            => 'select',
                    'title'           => 'Select',
                    'description'     => 'The <code>select</code> element is used to create a drop-down list.',
                    'name'            => 'my-select',
                    'data'            => array(
                        'key1'  => 'Value 1',
                        'key2'  => 'Value 2',
                        'key3'  => 'Value 3'
                    ),
                    'default'         => 'key2'
                ),
                array(
                    'type'            => 'switch',
                    'title'           => 'Switch',
                    'description'     => 'The <code>switch</code> element is used to create a 2-option input.',
                    'name'            => 'my-switch',
                    'default'         => 'off'
                ),
                array(
                    'type'            => 'composite',
                    'title'           => 'Composite',
                    'description'     => 'The <code>composite</code> component is a component comprised of other UI components',
                    'name'            => 'my-composite',
                    'template'        => '<label>Text:{{my-text}}</label><label>Number:{{my-number}}</label>',
                    'components'      => array(
                        array(
                            'type'        => 'text',
                            'name'        => 'my-text'
                        ),
                        array(
                            'type'        => 'number',
                            'name'        => 'my-number'
                        )
                    ),
                    'default'         => array(
                        'my-text'   => 'text',
                        'my-number' => 5
                    )
                ) 
            )
        ));

        amarkal_add_settings_child_page(array(
            'parent_slug'  => 'my-settings-page',
            'slug'         => 'validation-settings-page',
            'title'        => 'Validation',
            'menu_title'   => 'Validation',
            'subtitle'     => 'Amarkal UI Components validation',
            'fields'       => array(
                array(
                    'type'            => 'text',
                    'title'           => 'Text Field',
                    'description'     => 'This field accepts text that is shorter than 20 characters.',
                    'name'            => 'my-textfield',
                    'size'            => 20,
                    'default'         => null,
                    'validation'      => function($v,&$e) {
                        if(strlen($v) > 20) {
                            $e = 'Value must be less than 20 characters long.';
                            return false;
                        }
                        return true;
                    }
                ),
                array(
                    'type'            => 'text',
                    'title'           => 'Text Field',
                    'description'     => 'This field is validated using a built-in function from the module <code>amarkal-validation</code>.',
                    'name'            => 'my-textfield2',
                    'size'            => 20,
                    'default'         => null
                ),
                array(
                    'type'            => 'number',
                    'title'           => 'Number Field',
                    'description'     => 'This field accepts a numeric value that is less than 15.',
                    'name'            => 'my-numberfield',
                    'default'         => 5,
                    'max'             => 15
                ),
                array(
                    'type'            => 'number',
                    'title'           => 'Invalid Number Field',
                    'description'     => 'This field will always throw an error because its default value is invalid.',
                    'name'            => 'my-invalid-numberfield',
                    'default'         => 20,
                    'max'             => 15
                )
            )
        ));

        // Add a settings page to the Tools sidebar submenu
        amarkal_add_settings_child_page(array(
            'parent_slug'  => 'tools.php',
            'slug'         => 'toolsphp-childv-page',
            'title'        => 'Tools.php Child Page',
            'menu_title'   => 'Amarkal settings',
            'fields'       => array(
                array(
                    'type'            => 'text',
                    'title'           => 'Text Field',
                    'description'     => 'The <code>text</code> field accepts any form of text',
                    'name'            => 'my-tools-textfield',
                    'placeholder'     => 'Enter text...',
                    'default'         => '',
                    'filter'          => 'sanitize_text_field'
                )
            )
        ));

    }
}
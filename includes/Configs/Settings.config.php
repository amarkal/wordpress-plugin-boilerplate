<?php
return array(
    'parent_slug'  => 'my-settings-page',
    'slug'         => 'my-settings-page',
    'title'        => 'Amarkal Settings',
    'subtitle'     => 'A settings framework for WordPress built atop of Amarkal UI',
    'sections'     => array(
        array(
            'slug'         => 'components',
            'title'        => 'Components',
            'subtitle'     => 'Amarkal UI Components showcase',
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
                    'type'            => 'slider',
                    'title'           => 'Slider',
                    'description'     => 'The <code>slider</code> element is used to specify a number or a range.',
                    'name'            => 'my-slider',
                    'default'         => 0,
                    'min'             => 0,
                    'max'             => 100
                ),
                array(
                    'type'            => 'slider',
                    'title'           => 'Slider',
                    'description'     => 'A slider example with large numbers.',
                    'name'            => 'my-slider-2',
                    'default'         => 5000,
                    'min'             => 0,
                    'max'             => 10000,
                    'step'            => 500
                ),
                array(
                    'type'            => 'slider',
                    'title'           => 'Slider',
                    'description'     => 'A slider example with negative numbers.',
                    'name'            => 'my-slider-3',
                    'default'         => -7,
                    'min'             => -10,
                    'max'             => -5,
                    'step'            => 1
                ),
                array(
                    'type'            => 'slider',
                    'title'           => 'Slider',
                    'description'     => 'A slider example decimal numbers.',
                    'name'            => 'my-slider-4',
                    'default'         => 0.5,
                    'min'             => 0,
                    'max'             => 1,
                    'step'            => .05
                ),
                array(
                    'type'            => 'button',
                    'title'           => 'Button',
                    'label_start'     => 'Do Something',
                    'label_done'      => 'Done!',
                    'label_doing'     => 'Processing...',
                    'request_url'     => admin_url('admin-ajax.php'),
                    'request_data'    => array(
                        'action'      => 'my_button_callback'
                    ),
                    'description'     => 'The <code>button</code> component is used to run a callback in the backend.'
                ),
                array(
                    'type'            => 'toggle',
                    'title'           => 'Toggle',
                    'name'            => 'my-toggle',
                    'description'     => 'The <code>toggle</code> element lets the user select one or more options from a list of options.',
                    'default'         => 'key2',
                    'data'            => array(
                        'key1'  => 'Value 1',
                        'key2'  => 'Value 2',
                        'key3'  => 'Value 3'
                    )
                ),
                array(
                    'type'            => 'toggle',
                    'title'           => 'Toggle',
                    'name'            => 'my-toggle-1',
                    'description'     => 'This <code>toggle</code> element accepts multiple selections.',
                    'multi'           => true,
                    'default'         => array('key1'),
                    'data'            => array(
                        'key1'  => 'Value 1',
                        'key2'  => 'Value 2',
                        'key3'  => 'Value 3'
                    )
                ),
                array(
                    'type'            => 'code',
                    'title'           => 'Code',
                    'description'     => 'The <code>code</code> component is a code editor instance based on Cloud9\'s Ace Editor.',
                    'name'            => 'code',
                    'max_lines'       => 10,
                    'default'         => "<?php \n\$var = 'hello';\necho \"\$var world\";\n",
                    'language'        => 'php',
                    'editable'        => true
                ),
                array(
                    'type'            => 'progressbar',
                    'title'           => 'Progressbar',
                    'description'     => 'The <code>progressbar</code> component is a readonly component used to display progress.',
                    'min'             => 0,
                    'max'             => 800,
                    'value'           => 120
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
        ),
        array(
            'slug'         => 'disabled_components',
            'title'        => 'Disabled Components',
            'subtitle'     => 'All disableable component in their disabled state',
            'fields'       => array(
                array(
                    'name'      => 'disabled_text',
                    'type'      => 'text',
                    'disabled'  => true,
                    'default'   => 'Disabled text'
                ),
                array(
                    'name'      => 'disabled_textarea',
                    'type'      => 'textarea',
                    'disabled'  => true,
                    'default'   => 'Disabled text'
                ),
                array(
                    'name'      => 'disabled_number',
                    'type'      => 'number',
                    'disabled'  => true,
                    'default'   => 123456
                ),
                array(
                    'name'      => 'disabled_button',
                    'type'      => 'button',
                    'request_url'=> '',
                    'disabled'  => true,
                    'label_start'=> 'Disabled Button'
                ),
                array(
                    'name'      => 'disabled_checkbox',
                    'type'      => 'checkbox',
                    'disabled'  => true,
                    'default'   => array('key2'),
                    'data'      => array(
                        'key1'    => 'Value 1',
                        'key2'    => 'Value 2',
                        'key3'    => 'Value 3'
                    )
                ),
                array(
                    'name'      => 'disabled_code',
                    'type'      => 'code',
                    'disabled'  => true,
                    'default'   => 'asdasd',
                    'language'  => 'php'
                ),
                array(
                    'name'      => 'disabled_composite',
                    'type'      => 'composite',
                    'template'  => '{{text}}<br>{{textarea}}',
                    'default'   => array(
                        'text'     => 'Disabled text',
                        'textarea' => 'Disabled text'
                    ),
                    'components'=> array(
                        array(
                            'name'      => 'text',
                            'type'      => 'text',
                            'disabled'  => true
                        ),
                        array(
                            'name'      => 'textarea',
                            'type'      => 'textarea',
                            'disabled'  => true
                        )
                    )
                ),
                array(
                    'name'      => 'disabled_radio',
                    'type'      => 'radio',
                    'disabled'  => true,
                    'default'   => array('key2'),
                    'data'      => array(
                        'key1'    => 'Value 1',
                        'key2'    => 'Value 2',
                        'key3'    => 'Value 3'
                    )
                ),
                array(
                    'name'      => 'disabled_select',
                    'type'      => 'select',
                    'disabled'  => true,
                    'default'   => array('key2'),
                    'data'      => array(
                        'key1'    => 'Value 1',
                        'key2'    => 'Value 2',
                        'key3'    => 'Value 3'
                    )
                ),
                array(
                    'name'      => 'disabled_slider',
                    'type'      => 'slider',
                    'disabled'  => true,
                    'min'       => 0,
                    'max'       => 100
                ),
                array(
                    'name'      => 'disabled_switch',
                    'type'      => 'switch',
                    'disabled'  => true
                ),
                array(
                    'name'      => 'disabled_toggle',
                    'type'      => 'toggle',
                    'disabled'  => true,
                    'default'   => 'key2',
                    'data'      => array(
                        'key1'    => 'Value 1',
                        'key2'    => 'Value 2',
                        'key3'    => 'Value 3'
                    )
                ),
                array(
                    'name'      => 'disabled_toggle1',
                    'type'      => 'toggle',
                    'disabled'  => true,
                    'data'      => array(
                        'key1'    => 'Value 1',
                        'key2'    => 'Value 2',
                        'key3'    => 'Value 3'
                    )
                ),
            )
        ),
        array(
            'slug'         => 'validation',
            'title'        => 'Validation',
            'subtitle'     => 'Amarkal UI Components validation',
            'fields'       => array(
                array(
                    'type'            => 'text',
                    'title'           => 'Text Field',
                    'description'     => 'This field accepts text that is shorter than 20 characters.',
                    'name'            => 'my-valid-textfield',
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
                    'name'            => 'my-valid-textfield2',
                    'size'            => 20,
                    'default'         => null
                ),
                array(
                    'type'            => 'number',
                    'title'           => 'Number Field',
                    'description'     => 'This field accepts a numeric value that is less than 15.',
                    'name'            => 'my-valid-numberfield',
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
        )
    )
);
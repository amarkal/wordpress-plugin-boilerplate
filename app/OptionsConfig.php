<?php

use Amarkal\Extensions\WordPress\Options;
use Amarkal\UI\Components;

return array(
    'banner'        => MyPlugin\IMG_URL.'/banner.jpg',
    'title'         => 'MyPlugin',
    'subtitle'      => 'Amarkal based WordPress Plugin',
    'version'       => 'v'.MyPlugin\PLUGIN_VERSION,
    'author'        => 'Author',
    'author_url'    => 'http://www.website.com',
    'sidebar_title' => 'My Plugin',
    'sidebar_icon'  => 'dashicons-admin-plugins',
    'footer_icon'   => MyPlugin\IMG_URL.'/logo.png',
    'footer_text'   => '2014 © Author',
    'subfooter_text'=> 'Footer text is cool!',
    'sections'      => array(
        new Options\Section(array(
            'title'         => 'UI Components',
            'description'   => 'A showcase of all available Amarkal UI components. Hover over the question mark next to each component for additional info.',
            'icon'          => 'fa-list',
            'subsections'   => array(
                array(
                    'title'     => 'Normal state',
                    'fields'    => array(
                        new Components\Text(array(
                            'name'          => 'text',
                            'default'       => '',
                            'title'         => 'Text',
                            'placeholder'   => 'Enter your text here...',
                            'help'          => 'Used for simple text inputs'
                        )),
                        new Components\ToggleButton(array(
                            'name'          => 'toggle',
                            'title'         => 'Toggle Button',
                            'default'       => 'OFF',
                            'help'          => 'Simple two-state toggle button'
                        )),
                        new Components\ToggleButton(array(
                            'name'          => 'toggle1',
                            'title'         => 'Toggle Button',
                            'default'       => 'Two',
                            'labels'        => array('One', 'Two', 'Three'),
                            'help'          => 'Toggle buttons can have more than 2 labels'
                        )),
                        new Components\ToggleButton(array(
                            'name'          => 'toggle2',
                            'title'         => 'Toggle Button (Multivalue)',
                            'default'       => 'Two',
                            'labels'        => array('One', 'Two', 'Three'),
                            'multivalue'    => true,
                            'help'          => 'Toggle buttons can have multiple active values'
                        )),
                        new Components\Spinner(array(
                            'name'          => 'spinner',
                            'title'         => 'Spinner',
                            'step'          => 1,
                            'default'       => 1,
                            'help'          => 'Used for number inputs'
                        )),
                        new Components\Spinner(array(
                            'name'          => 'spinner1',
                            'title'         => 'Spinner',
                            'min'           => 5,
                            'max'           => 50,
                            'step'          => 5,
                            'default'       => 15,
                            'help'          => 'Spinners can have custom min, max and step'
                        )),
                        new Components\Slider(array(
                            'name'          => 'slider',
                            'title'         => 'Slider',
                            'help'          => 'Sliders are useful for number inputs where the range is known',
                            'default'       => 0, // Or array(0,0) if range
                            'min'           => 0,
                            'max'           => 100,
                            'step'          => 1,
                            'type'          => 'single' // Or [range|min|max]
                        )),
                        new Components\Slider(array(
                            'name'          => 'slider_range',
                            'title'         => 'Slider (Range)',
                            'help'          => 'Sliders can have two values, or range',
                            'default'       => array(20,50), // Or array(0,0) if range
                            'min'           => 0,
                            'max'           => 100,
                            'step'          => 1,
                            'type'          => 'range' // Or [range|min|max]
                        )),
                        new Components\Slider(array(
                            'name'          => 'slider_min',
                            'title'         => 'Slider (Min)',
                            'help'          => 'This slider ranges from its minimum value',
                            'default'       => 12, // Or array(0,0) if range
                            'min'           => 0,
                            'max'           => 30,
                            'step'          => '0.5',
                            'type'          => 'min' // Or [range|min|max]
                        )),
                        new Components\Slider(array(
                            'name'          => 'slider_max',
                            'title'         => 'Slider (Max)',
                            'help'          => 'This slider ranges from its maximum value',
                            'default'       => 15, // Or array(0,0) if range
                            'min'           => 0,
                            'max'           => 30,
                            'step'          => '0.5',
                            'type'          => 'max' // Or [range|min|max]
                        )),
                        new Components\DropDown(array(
                            'name'          => 'dropdown1',
                            'title'         => 'Drop Down',
                            'help'          => 'This is a simple drop down list, useful when there are many available choices',
                            'options'       => array('Value 1','Value 2','Value 3')
                        )),
                        new Components\DropDown(array(
                            'name'          => 'dropdown2',
                            'title'         => 'Drop Down',
                            'help'          => 'This drop down is using an associative array',
                            'options'       => array(
                                'key1'       => 'Value 1',
                                'key2'       => 'Value 2',
                                'key3'       => 'Value 3'
                            )
                        )),
                        new Components\Textarea(array(
                            'name'          => 'textarea',
                            'title'         => 'Textarea',
                            'help'          => 'While the text input is useful for single lines of inputs, this one allows multiple lines. The size can be easily adjusted.',
                        )),
                        new Components\Checkbox(array(
                            'name'          => 'checkbox',
                            'title'         => 'Check Boxes',
                            'help'          => 'This is a checkbox group. Useful if there are many options to choose from.',
                            'default'       => 'val1,val3',
                            'options'       => array(
                                'val1'      => 'Option 1',
                                'val2'      => 'Option 2',
                                'val3'      => 'Option 3',
                            )
                        )),
                        new Components\Process(array(
                            'name'          => 'process',
                            'title'         => 'Button',
                            'help'          => 'This button runs a PHP function when clicked',
                            'label'         => 'Click Me!',
                            'disabled'      => false,
                            'callback'      => function(){
                                Options\Notifier::INFO('The button "Click Me" was clicked. This notification was called from the callback function.');
                            },
                            'hook'          => 'afw_options_init'
                        )),
                        new Components\ProgressBar(array(
                            'title'         => 'Progress Bar',
                            'help'          => 'Progress bars are static objects that are given 2 values: value and max. These objects can be used to present information graphically',
                            'value'         => 34,
                            'max'           => 100
                        )),
                        new Components\Content(array(
                            'title'         => 'HTML Content',
                            'help'          => 'This is a simple HTML placeholder. Both PHP and plain HTML are acceptable.',
                            'template'      => MyPlugin\PLUGIN_DIR.'/content/simple.phtml'
                        )),
                        new Components\Content(array(
                            'title'         => 'AJAX HTML Content',
                            'help'          => 'HTML content placeholdes have the option to be retrieved using ajax. Parameters can be passed through to the script as well.',
                            'template'      => MyPlugin\PLUGIN_URL.'content/ajax.phtml',
                            'ajax'          => true,
                            'args'          => array(
                                'arg1', 
                                'arg2', 
                                'arg3'
                            )
                        )),
                        new Components\CodeEditor(array(
                            'title'         => 'Code Editor',
                            'help'          => 'Code can be edited live easily using this embedded Ace editor. Themes and languages can be specified.',
                            'name'          => 'editor',
                            'default'       => 'function sayHello( name )
{
    alert( "Hello " + name + "!" );
}
sayHello("Fred");',
                            'language'      => 'javascript',
                            'theme'         => 'github'
                        )),
                        new Components\CodeEditor(array(
                            'title'         => 'Code Editor',
                            'help'          => 'This editor loads and saves the code into a file.',
                            'name'          => 'editor_file',
                            'file'          => MyPlugin\PLUGIN_DIR.'/content/snippet.php',
                            'language'      => 'php',
                            'theme'         => 'twilight'
                        ))
                    )
                ),
                array(
                    'title'     => 'Disabled state',
                    'fields'    => array(
                        new Components\Text(array(
                            'name'          => 'text_disabled',
                            'default'       => '',
                            'title'         => 'Text',
                            'placeholder'   => 'Enter your text here...',
                            'disabled'      => true
                        )),
                        new Components\ToggleButton(array(
                            'name'          => 'toggle_disabled',
                            'title'         => 'Toggle Button',
                            'default'       => 'Two',
                            'labels'        => array('One', 'Two', 'Three'),
                            'disabled'      => true
                        )),
                        new Components\Spinner(array(
                            'name'          => 'spinner_disabled',
                            'title'         => 'Spinner',
                            'min'           => 5,
                            'max'           => 50,
                            'step'          => 5,
                            'default'       => 15,
                            'disabled'      => true
                        )),
                        new Components\Slider(array(
                            'name'          => 'slider_disabled',
                            'title'         => 'Slider',
                            'default'       => 0, // Or array(0,0) if range
                            'min'           => 0,
                            'max'           => 100,
                            'step'          => 1,
                            'disabled'      => true
                        )),
                        new Components\DropDown(array(
                            'name'          => 'dropdown_disabled',
                            'title'         => 'Drop Down',
                            'default'       => 'Value 2',
                            'disabled'      => true,
                            'options'       => array('Value 1','Value 2','Value 3')
                        )),
                        new Components\Textarea(array(
                            'name'          => 'textarea_disabled',
                            'title'         => 'Textarea',
                            'disabled'      => true
                        )),
                        new Components\Checkbox(array(
                            'name'          => 'checkbox_disabled',
                            'title'         => 'Check Boxes',
                            'default'       => 'val1,val3',
                            'disabled'      => true,
                            'options'       => array(
                                'val1'      => 'Option 1',
                                'val2'      => 'Option 2',
                                'val3'      => 'Option 3',
                            )
                        )),
                        new Components\Process(array(
                            'name'          => 'process_disabled',
                            'title'         => 'Button',
                            'label'         => 'Click Me!',
                            'disabled'      => true
                        )),
                        new Components\CodeEditor(array(
                            'title'         => 'Code Editor',
                            'name'          => 'editor_disabled',
                            'default'       => 'function sayHello( name )
{
    alert( "Hello " + name + "!" );
}
sayHello("Fred");',
                            'language'      => 'javascript',
                            'theme'         => 'github',
                            'disabled'      => true
                        ))
                    )
                )
            )
        )),
        new Options\Section(array(
            'title'         => 'Validation',
            'description'   => 'Certain UI components can be validated using a custom PHP validation function. Here are some examples of this powerful feature.',
            'icon'          => 'fa-check-square-o',
            'fields'   => array(
                new Components\Text(array(
                    'name'          => 'text_validation',
                    'default'       => 'foo',
                    'title'         => 'Foo Bar',
                    'help'          => 'Try to put "bar" in the text and see what happens. Watch out!',
                    'validation'    => function( $v, &$e ) {
                        $e = 'The value <strong>bar</strong> is invalid for <strong>Foo Bar</strong>';
                        return 'bar' != trim($v);
                    }
                )),
                new Components\Text(array(
                    'name'          => 'text_validation1',
                    'placeholder'   => 'I only take numbers',
                    'title'         => 'Numbers Only',
                    'help'          => 'This text input only accepts numbers',
                    'validation'    => function( $v, &$e ) {
                        $e = 'The value <strong>'.$v.'</strong> is invalid for <strong>Numbers Only</strong>, only numbers are allowd';
                        return is_numeric($v) || empty($v);
                    }
                ))
            )
        )),
        new Options\Section(array(
            'title'         => 'Filtering',
            'description'   => '',
            'icon'          => 'fa-filter',
            'fields'   => array(
                new Components\Text(array(
                    'name'          => 'text_filter',
                    'default'       => '',
                    'title'         => 'Text',
                    'placeholder'   => 'Enter your text here...',
                    'help'          => 'Used for simple text inputs'
                ))
            )
        )),
        new Options\Section(array(
            'title'         => 'Composition',
            'description'   => 'Amarkal UI allows you to easily create composite components consisting of any UI component. Using this powerful feature you can create custom UI components to fit your needs.',
            'icon'          => 'fa-puzzle-piece',
            'fields'   => array(
                new Components\Composite(array(
                    'name'          => 'border',
                    'title'         => 'Border',
                    'help'          => 'The value of this coomposite component will be generated using the template <% border_type %> <% border_width %><% border_width_type %>',
                    'template'      => '<% border_type %> <% border_width %><% border_width_type %>',
                    'components'    => array(
                        new Components\DropDown(array(
                            'name'      => 'border_type',
                            'title'     => 'Border Type',
                            'default'   => 'solid',
                            'options'   => array(
                                'solid','dashed','dotted'
                            )
                        )),
                        new Components\Spinner(array(
                            'name'      => 'border_width',
                            'title'     => 'Border Width',
                            'min'       => 1,
                            'step'      => 1,
                            'default'   => 25
                        )),
                        new Components\ToggleButton(array(
                            'name'      => 'border_width_type',
                            'title'     => 'Unit Type',
                            'default'   => 'px',
                            'labels'    => array('px', '%', 'em')
                        ))
                    )
                ))
            )
        ))
    )
);
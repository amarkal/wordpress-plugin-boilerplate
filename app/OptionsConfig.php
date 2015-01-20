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
            'description'   => 'A showcase of all available Amarkal UI components',
            'icon'          => 'fa-list',
            'subsections'   => array(
                array(
                    'title'     => 'Regular state',
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
                            'help'          => 'Toggle buttons can have more than 2 values'
                        )),
                        new Components\ToggleButton(array(
                            'name'          => 'toggle2',
                            'title'         => 'Toggle Button (Multivalue)',
                            'default'       => 'Two',
                            'labels'        => array('One', 'Two', 'Three'),
                            'multivalue'    => true,
                            'help'          => 'Toggle buttons can have multiple values'
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
                            'title'         => 'Slider (Range)',
                            'help'          => 'Sliders can have two values, or range',
                            'default'       => 12, // Or array(0,0) if range
                            'min'           => 0,
                            'max'           => 30,
                            'step'          => '0.5',
                            'type'          => 'min' // Or [range|min|max]
                        ))
                    )
                ),
                array(
                    'title'     => 'Disabled state',
                    'fields'    => array(
                        new Components\Text(array(
                            'name'          => 'text_disabled',
                            'default'       => '',
                            'title'         => 'Text (Disabled)',
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
                        ))
                    )
                )
            ),
            'fields'        => array(
                
                new Components\Composite(array(
                    'name'          => 'my_comp',
                    'title'         => 'Auto Assign',
                    'template'      => '<% border_type %> <% border_width %><% border_width_type %> <% myslider2 %>',
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
                        )),
                        new Components\Slider(array(
                            'name'          => 'myslider2',
                            'title'         => 'Slider Test',
                            'disabled'      => false,
                            'default'       => 0, // Or array(0,0) if range
                            'min'           => 0,
                            'max'           => 100,
                            'step'          => 1,
                            'type'          => 'single' // Or [range|min|max]
                        ))
                    )
                )),
                new Components\Slider(array(
                    'name'          => 'myslider',
                    'title'         => 'Slider Test',
                    'disabled'      => false,
                    'default'       => 0, // Or array(0,0) if range
                    'min'           => 0,
                    'max'           => 100,
                    'step'          => 1,
                    'type'          => 'single' // Or [range|min|max]
                )),
                new Components\Slider(array(
                    'name'          => 'myslider1',
                    'title'         => 'Slider Test',
                    'disabled'      => false,
                    'default'       => array(20,50), // Or array(0,0) if range
                    'min'           => 0,
                    'max'           => 100,
                    'step'          => 1,
                    'type'          => 'range' // Or [range|min|max]
                )),
                new Components\Process(array(
                    'name'          => 'process',
                    'title'         => 'click',
                    'label'         => 'Click Me!',
                    'disabled'      => false,
                    'callback'      => function(){},
                    'hook'          => 'afw_options_init'
                ))
            )
        )),
        new Options\Section(array(
            'title'         => 'Skins',
            'icon'          => 'fa-paint-brush',
            'description'   => 'Choose a skin for Mivhak',
            'fields'        => array(
                new Components\DropDown(array(
                    'name'          => 'skin',
                    'title'         => 'Skin',
                    'help'          => 'Choose the skin that best matches your theme\'s style.',
                    'default'       => 'default.css',
                    'options'       => array(
                        'Default'           => 'default.css',
                        'Desert'            => 'desert.css',
                        'Doxy'              => 'doxy.css',
                        'Github'            => 'github.css',
                        'Hemisu (dark)'     => 'hemisu-dark.css',
                        'Hemisu (light)'    => 'hemisu-light.css',
                        'Mivhak'            => 'mivhak.css',

                    )
                )),
                new Components\Content(array(
                    'title'         => 'Preview',
                    'full_width'    => true,
                    'template'      => Mivhak\PLUGIN_DIR . '/preview.phtml'
                ))
            )
        ))
    )
);
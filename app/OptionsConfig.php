<?php

use Amarkal\Extensions\WordPress\Options;

return array(
    'banner'        => MyPlugin\IMG_URL.'/banner.jpg',
    'title'         => 'MyPlugin',
    'subtitle'      => 'Amarkal based WordPress Plugin',
    'version'       => 'v'.MyPlugin\PLUGIN_VERSION,
    'author'        => 'Author',
    'author_url'    => 'http://www.website.com',
    'sidebar_title' => 'My Plugin',
    'sidebar_icon'  => 'dashicons-editor-code',
    'footer_icon'   => MyPlugin\IMG_URL.'/logo.png',
    'footer_text'   => '2014 © Author',
    'subfooter_text'=> 'Footer text is cool!',
    'sections'      => array(
        new Options\Section(array(
            'title'         => 'General Test',
            'description'   => 'General settings',
            'icon'          => 'fa-gear',
            'subsections'   => array(
                array(
                    'title' => 'Subsection 1',
                    'fields'=> array(
                        new Options\UI\Switcher(array(
                            'name'          => 'line_numbers1',
                            'title'         => 'Line Numbers',
                            'default'       => 'OFF',
                            'help'          => 'Enabling this option will show line numbers on all code segments.'
                        )),
                        new Options\UI\Switcher(array(
                            'name'          => 'line_numbers2',
                            'title'         => 'Line Numbers 2',
                            'default'       => 'OFF',
                            'help'          => 'Enabling this option will show line numbers on all code segments.'
                        )),
                        new Options\UI\Text(array(
                            'name'          => 'text',
                            'title'         => 'Line Numbers 2',
                            'default'       => 'OFF',
                            'help'          => 'Enabling this option will show line numbers on all code segments.'
                        )),
                        new Options\UI\Textarea(array(
                            'name'          => 'textarea',
                            'title'         => 'Line Numbers 2',
                            'default'       => 'OFF',
                            'help'          => 'Enabling this option will show line numbers on all code segments.'
                        )),
                        new Options\UI\Slider(array(
                            'name'          => 'caching_freq',
                            'title'         => 'Caching Frequency',
                            'default'       => 25,
                            'min'           => 10,
                            'max'           => 3600,
                            'step'          => 5,
                            'type'          => 'single',
                            'description'   => 'Set the caching frequency in seconds',
                            'help'          => 'This is used as the minimum threshold to make a query to Twitter.com. In other words, this is the minimum time between each query'
                        ))
                    )
                ),
                array(
                    'title' => 'Subsection 2',
                    'fields'=> array(
                        new Options\UI\Spinner(array(
                            'name'          => 'min_lines1',
                            'title'         => 'Minimum Lines',
                            'min'           => 1,
                            'step'          => 1,
                            'default'       => 1,
                            'help'          => 'Code segments with less lines than specified here will not show a meta header.'
                        )),
                        new Options\UI\Spinner(array(
                            'name'          => 'min_lines2',
                            'title'         => 'Minimum Lines',
                            'min'           => 1,
                            'step'          => 1,
                            'default'       => 1,
                            'help'          => 'Code segments with less lines than specified here will not show a meta header.'
                        ))
                    )
                )
            )
        )),
        new Options\Section(array(
            'title'         => 'General',
            'description'   => 'General settings',
            'icon'          => 'fa-gear',
            'fields'        => array(
                new Options\UI\Switcher(array(
                    'name'          => 'line_numbers',
                    'title'         => 'Line Numbers',
                    'default'       => 'OFF',
                    'help'          => 'Enabling this option will show line numbers on all code segments.'
                )),
                new Options\UI\MultiField(array(
                    'name'          => 'meta',
                    'title'         => 'Meta Header',
                    'fields'        => array(
                        new Options\UI\Switcher(array(
                            'name'          => 'show_meta',
                            'title'         => 'Show Meta',
                            'default'       => 'ON',
                            'help'          => 'Display a header with meta information and controls.'
                        )),
                        new Options\UI\Spinner(array(
                            'name'          => 'min_lines',
                            'title'         => 'Minimum Lines',
                            'min'           => 1,
                            'step'          => 1,
                            'default'       => 1,
                            'help'          => 'Code segments with less lines than specified here will not show a meta header.'
                        ))
                    )
                )),
                new Options\UI\Switcher(array(
                    'name'          => 'auto_assign',
                    'title'         => 'Auto Assign',
                    'labels'        => array('PRE', 'CODE', 'XHR'),
                    'multivalue'    => true,
                    'help'          => 'Some helpful text'
                ))
            )
        ))
    )
);
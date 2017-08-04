<?php

namespace WPPB\Widgets;

class MyCoolWidget extends \Amarkal\Widget\AbstractWidget
{   
    /**
     * The widget's configuration
     */
    public function config()
    {
        global $fields;
        return array(
            'id'              => 'my-cool-widget',   // The widget's id
            'name'            => 'My Cool Widget',  // The widget's id
            'widget_options'  => array(
                'description' => 'Just a very very cool widget...'  // The widget's description
            ),
            'control_options' => array(),           // Optional
            
            /**
             * The 'fields' argument specifies a list of amarkal-ui components to be used for the widget's admin form.
             */
            'fields'          => array(
                array(
                    'type'            => 'textarea',
                    'title'           => 'Content',
                    'description'     => 'The <code>text</code> field accepts any form of text',
                    'help'            => 'This is a <code>help</code> tooltip that accepts HTML like <a href="#">links</a> and <strong>special stylig</strong>',
                    'name'            => 'content',
                    'default'         => null
                ),
                array(
                    'type'            => 'switch',
                    'title'           => 'Switch',
                    'description'     => 'The <code>switch</code> allows the user to select between 2 available options.',
                    'name'            => 'switch',
                    'default'         => 'off'
                ),
                array(
                    'type'            => 'slider',
                    'title'           => 'Slider',
                    'description'     => 'The <code>slider</code> allows the user to select a numeric value within a range of values.',
                    'name'            => 'slider',
                    'min'             => 0,
                    'max'             => 20,
                    'default'         => 10
                ),
                array(
                    'type'            => 'checkbox',
                    'title'           => 'Checkbox',
                    'description'     => 'The <code>checkbox</code> field lets the user select one or more options from a set of alternatives.',
                    'name'            => 'checkbox',
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
                    'name'            => 'radio',
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
                    'name'            => 'select',
                    'data'            => array(
                        'key1'  => 'Value 1',
                        'key2'  => 'Value 2',
                        'key3'  => 'Value 3'
                    ),
                    'default'         => 'key2'
                ),
                array(
                    'type'            => 'toggle',
                    'title'           => 'Toggle',
                    'name'            => 'toggle',
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
                    'default'         => "<?php \n\$var = 'hello';\necho \"\$var world\";\n?>",
                    'language'        => 'php',
                    'editable'        => true
                ),
                array(
                    'type'            => 'composite',
                    'title'           => 'Composite',
                    'description'     => 'The <code>composite</code> component is a component comprised of other UI components',
                    'name'            => 'composite',
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
        );
    }
    
    /**
     * The front-end display of widget. User data is accesible through the $instance variable.
     */
    public function widget( $args, $instance ) 
    {
        $title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );        
        
        echo $args['before_widget'];
        
        // Echo the widget's title if not empty
        if ( $title ) {
            echo $args['before_title'] . $title . $args['after_title'];
        }
        
        // Echo the widget's content if not empty
        if( $instance['content'] ) {
            echo '<p>'.$instance['content'].'</p>';
        }
        
        echo $args['after_widget'];
    }
}
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
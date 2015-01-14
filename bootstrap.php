<?php
/**
 * Plugin Name
 *
 * Plugin Description
 *
 * @package         Plugin Name
 * @author          Author name <email>
 * @link            http://www.website.com/myplugin
 * @copyright       2014 author
 *
 * @wordpress-plugin
 * Plugin Name:     Plugin Name
 * Plugin URI:      http://www.website.com/myplugin
 * Description:     Plugin description
 * Version:         1.0
 * Author:          Author name
 * Author URI:      http://www.website.com/
 * Text Domain:     myplugin/
 * Domain Path:     /languages
 */

if( !function_exists('myplugin_bootstrap') )
{
    function myplugin_bootstrap()
    {
        
        $validator = require_once 'vendor/askupa-software/amarkal-framework/EnvironmentValidator.php';
        if ( $validator->is_valid( 'plugin' ) )
        { 
            require_once 'app/MyPlugin.php';
        }
    }
    add_action( 'plugins_loaded', 'myplugin_bootstrap' );
}

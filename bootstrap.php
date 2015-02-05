<?php
/**
 * Amarkal Based WordPress Plugin Boilerplate
 *
 * This boilerplate is used as a starting point for Amarkal based WordPress
 * plugins.
 *
 * @package         Plugin Name
 * @author          Author name <email>
 * @link            http://www.website.com/myplugin
 * @copyright       2014 author name
 *
 * @wordpress-plugin
 * Plugin Name:     Plugin Name
 * Plugin URI:      http://www.website.com/myplugin
 * Description:     Amarkal Based WordPress Plugin Boilerplate
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
        // Check that the system is sufficient to run Amarkal.
        $validator = require_once 'vendor/askupa-software/amarkal-framework/EnvironmentValidator.php';
        if ( $validator->is_valid( 'plugin', 'Plugin Name' ) )
        { 
            require_once 'app/MyPlugin.php';
        }
    }
    add_action( 'plugins_loaded', 'myplugin_bootstrap' );
}

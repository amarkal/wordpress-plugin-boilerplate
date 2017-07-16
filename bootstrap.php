<?php
/**
 * A WordPress plugin boilerplate, implemented using the Amarkal Framework
 *
 * @package         WordPress Plugin Boilerplate
 * @author          Author name <email>
 * @link            http://www.website.com/myplugin
 * @copyright       2017 author name
 *
 * @wordpress-plugin
 * Plugin Name:     WordPress Plugin Boilerplate
 * Plugin URI:      http://www.website.com/myplugin
 * Description:     A WordPress plugin boilerplate, implemented using the Amarkal Framework
 * Version:         1.0.0
 * Author:          Author name
 * Author URI:      http://www.website.com/
 * Text Domain:     myplugin/
 * Domain Path:     /languages
 */

if( !function_exists('myplugin_bootstrap') )
{
    function myplugin_bootstrap()
    {
        require_once 'vendor/autoload.php';
        WPPB\Plugin::init();
    }
}
myplugin_bootstrap();
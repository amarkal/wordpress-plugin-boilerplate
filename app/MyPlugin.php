<?php

namespace MyPlugin;

use Amarkal\Extensions\WordPress\Plugin;
use Amarkal\Extensions\WordPress\Options;
use Amarkal\Loaders;

class MyPlugin extends Plugin\AbstractPlugin {
    
    public function __construct() 
    {
        parent::__construct( dirname( __FILE__ ), new Plugin\PluginSetup() );
     
        $this->generate_defines();
        
        // Register an options page
        $this->options = new Options\OptionsPage( include('OptionsConfig.php') );
        $this->options->register();
        
        $this->register_assets();
    }
    
    public function generate_defines()
    {
        $basepath = dirname( __FILE__ );
        define( __NAMESPACE__.'\PLUGIN_DIR', $basepath );
        define( __NAMESPACE__.'\PLUGIN_URL', plugin_dir_url( $basepath ) );
        define( __NAMESPACE__.'\JS_URL', plugin_dir_url( $basepath ).'app/assets/js' );
        define( __NAMESPACE__.'\CSS_URL', plugin_dir_url( $basepath ).'app/assets/css' );
        define( __NAMESPACE__.'\IMG_URL', plugin_dir_url( $basepath ).'app/assets/img' );
        define( __NAMESPACE__.'\PLUGIN_VERSION', '1.0' );
    }
    
    public function reg_namespace()
    {
        $loader = new Loaders\ClassLoader();
        $loader->register_namespace( 'MyPlugin', PLUGIN_DIR );
        $loader->register();
    }
}
new MyPlugin();
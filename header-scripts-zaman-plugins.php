<?php
/**
 * @package HeaderScripts
 */
/*
Plugin Name: Header Scripts | Zaman Plugins
Plugin URI: https://aktaruzzaman.com/
Description: Using this plugin you can insert code in the head section
Version: 1.0.0
Author: Aktar Uz Zaman
Author URI: https://aktaruzzaman.com/
License: GPLv2 or later
Text Domain: header-scripts
*/

if(! defined('ABSPATH')){
    die;
}

include_once "inc/autoloader.php";
$autoload = new Autoload_WP();
$headerScripts = new HeaderScripts();
$headerScripts->addHeaderScripts();


$scriptsToHeader = new ScriptsToHeader();
$scriptsToHeader->addScripts();
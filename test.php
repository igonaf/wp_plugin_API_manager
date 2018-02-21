<?php
/*
Plugin Name: test
Plugin URI: https://#/
Description: It keeps your site protected even while you sleep. To get started: activate the Akismet plugin and then go to your Akismet Settings page to set up your API key.
Version: 1.0.2
Author: c
*/

require plugin_dir_path(__FILE__) . 'WP_Plugin_API_Manager.php';
require plugin_dir_path(__FILE__) . 'My_plugin.php';


$manager = new WP_Plugin_API_Manager();
$plugin = new My_Plugin();

$manager->register($plugin);
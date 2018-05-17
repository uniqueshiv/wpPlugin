<?php
/*
Plugin Name: Recipe
Author: Shiva Chauhan
Author URI: https://webninjaz.com
Plugin URI: https://webninjaz.com
Description: Used by millions, Akismet is quite possibly the best way in the world to protect your blog from spam. It keeps your site protected even while you sleep.
Version: 1.00
Text Domain: recipe
License: GPL2
*/

if(!function_exists('add_action')){
  echo "Not allowed";
  exit();
}

//setup

//include
require_once(dirname(__FILE__).'/includes/activate.php');
require_once(dirname(__FILE__).'/includes/init.php');

//hooks
register_activation_hook(__FILE__,'spnin_activate_plugin');
add_action('init','recipe_init');

//shortcodes

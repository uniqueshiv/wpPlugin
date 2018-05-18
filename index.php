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
define('RECIPE_PLUGIN_URL',__FILE__);



//include
require_once(dirname(__FILE__).'/includes/activate.php');
require_once(dirname(__FILE__).'/includes/init.php');
require_once(dirname(__FILE__).'/includes/admin/init.php');
require_once(dirname(__FILE__).'/process/save-post.php');
require_once(dirname(__FILE__).'/process/filter-content.php');

require_once(dirname(__FILE__).'/includes/front/enqueue.php');

require_once(dirname(__FILE__).'/process/rate-recipe.php');

//hooks
register_activation_hook(__FILE__,'spnin_activate_plugin');

add_action('init','recipe_init'); //init the includes/init.php file function
add_action('admin_init','spninp_admin_init');//init includes/admin/init.php file function

add_action('save_post_recipe','spninp_save_post_admin',10,3);//save post run this function

add_filter('the_content','spninp_filter_recipe_content'); //filter the recipe content

add_action('wp_enqueue_scripts','spninp_enqueue_scripts',9999);

//rating ajax_url
add_action('wp_ajax_spninp_rate_recipe',"spninp_rate_recipe");
add_action('wp_ajax_nopriv_spninp_rate_recipe',"spninp_rate_recipe");


//shortcodes

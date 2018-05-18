<?php
function spninp_enqueue_scripts(){

  wp_register_style('spninp_rateit',plugins_url('/assets/scripts/rateit.css',RECIPE_PLUGIN_URL,array(),'1.0.0',true));
  wp_enqueue_style('spninp_rateit');

  wp_register_script('spninp_ratejs',plugins_url('recipe/assets/scripts/jquery.rateit.min.js'),RECIPE_PLUGIN_URL);
  wp_enqueue_script('spninp_ratejs');

  wp_register_script('spninp_options',plugins_url('recipe/assets/js/options.js'),RECIPE_PLUGIN_URL,array(),'1.0.0',true);

  //wp_enqueue_media();
  wp_localize_script('spninp_options',"recipe_obj",array(
    "ajax_url"        =>  admin_url('admin-ajax.php')
  ));
  wp_enqueue_script('spninp_options');
}

<?php
function spninp_admin_enqueue(){
//  global $typenow;
  // if(!isset($_GET['paged']) && $_GET['paged']!='spnin_theme_opts'){
  //   return;
  // }
  wp_register_style('spninp_bootstrap',plugins_url('/assets/vendor/bootstrap/css/bootstrap.min.css',RECIPE_PLUGIN_URL));
  wp_enqueue_style('spninp_bootstrap');

  

}

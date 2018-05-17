<?php

function spnin_activate_plugin(){
  if(version_compare(get_bloginfo('version'), '4.2', '<')){
    wp_die(_('You must update Wordpress to use this plugin.', 'recipe'));
  }
}
 ?>

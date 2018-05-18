<?php

function spnin_activate_plugin(){
  if(version_compare(get_bloginfo('version'), '4.2', '<')){
    wp_die(_('You must update Wordpress to use this plugin.', 'recipe'));
  }

  global $wpdb;
  //$charset_collate = $wpdb->get_charset_collate();
  $creatsql ="
      CREATE TABLE `".$wpdb->prefix."recipe_ratings` (
      `id` int(11) NOT NULL,
      `recipe_id` bigint(20) NOT NULL,
      `rating` float NOT NULL,
      `user_id` varchar(32) NOT NULL
    ) ENGINE=InnoDB ".$wpdb->get_charset_collate().";
    ";

    require(ABSPATH.'/wp-admin/includes/upgrade.php');
    dbDelta($creatsql);
}

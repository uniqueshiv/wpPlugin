<?php
function spninp_rate_recipe(){
  // echo "<pre>";
  // print_r($_POST);
  // exit();

  global $wpdb;
  $response           =  array('status'=>1);
  $post_id            =  absint($_POST['rid']);
  $rating             =  round($_POST['rating'],1);
  $user_ip            =  $_SERVER['REMOTE_ADDR'];


  $rating_count       =

  $wpdb->insert(
    $wpdb->prefix.'recipe_ratings',
    array(
        'recipe_id'       =>   $post_id,
        'rating'          =>   $rating,
        'user_ip'         =>   $user_ip
      ),
      array(
          '%d','%f','%s'
      )
    );

    $response['status']   = 2;
    wp_send_json($response);
}

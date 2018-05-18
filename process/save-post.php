<?php
function spninp_save_post_admin($post_id,$post,$update){
  if(!$update){
    return;
  }
  // echo "<pre>";
  // print_r($_POST);
  // die();
  $recipe_data       = array();
  $recipe_data['ingredients']               = sanitize_text_field($_POST['spninp_inputingredients']);
  $recipe_data['time']                      = sanitize_text_field($_POST['spninp_inputtime']);
  $recipe_data['utensils']                  = sanitize_text_field($_POST['spninp_inpututensils']);
  $recipe_data['level']                     = sanitize_text_field($_POST['spninp_inputlevel']);
  $recipe_data['mealtype']                 = sanitize_text_field($_POST['spninp_inputmealtype']);

  update_post_meta($post_id,'recipe_data',$recipe_data);
}

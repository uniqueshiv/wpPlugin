<?php
function spnin_create_metaboxes(){
    add_meta_box(
      'spnin_recipie_options_mb',
      __('Recipe Options','recipe'),
      'spnin_recipe_options_mb',
      'recipe',
      'normal',
      'high'
    );
}

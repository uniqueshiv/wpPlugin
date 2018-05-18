<?php
function spninp_admin_init(){
    require('create-metaboxes.php');
    require('recipe-options.php');
    require('enqueue.php');

    add_action('add_meta_boxes_recipe','spnin_create_metaboxes');
    add_action('admin_enqueue_scripts','spninp_admin_enqueue');
}

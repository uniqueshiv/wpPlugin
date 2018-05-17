<?php

function recipe_init(){
  $labels = array(
		'name'               => _x( 'Recipes', 'post type general name', 'Recipe' ),
		'singular_name'      => _x( 'Recipe', 'post type singular name', 'Recipe' ),
		'menu_name'          => _x( 'Recipes', 'admin menu', 'Recipe' ),
		'name_admin_bar'     => _x( 'Recipe', 'add new on admin bar', 'Recipe' ),
		'add_new'            => _x( 'Add New', 'Recipe', 'Recipe' ),
		'add_new_item'       => __( 'Add New Recipe', 'Recipe' ),
		'new_item'           => __( 'New Recipe', 'Recipe' ),
		'edit_item'          => __( 'Edit Recipe', 'Recipe' ),
		'view_item'          => __( 'View Recipe', 'Recipe' ),
		'all_items'          => __( 'All Recipes', 'Recipe' ),
		'search_items'       => __( 'Search Recipes', 'Recipe' ),
		'parent_item_colon'  => __( 'Parent Recipes:', 'Recipe' ),
		'not_found'          => __( 'No Recipes found.', 'Recipe' ),
		'not_found_in_trash' => __( 'No Recipes found in Trash.', 'Recipe' )
	);
  $args = array(
		'labels'             => $labels,
    'description'        => __( 'A custom post type for recipes.', 'recipe' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'recipe' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    'taxonomies'        =>  array('category','post_tag');
	);

  register_post_type( 'recipe', $args );

}

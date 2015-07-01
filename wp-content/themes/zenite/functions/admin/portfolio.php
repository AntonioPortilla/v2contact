<?php

add_action('init', 'portfolio_register');
add_action('init', 'register_portfolio_category');  

function portfolio_register() {

	$labels = array(
		'name' => _x('Portfolio', 'portfolio type general name','zenite'),
		'singular_name' => _x('portfolio', 'portfolio type singular name','zenite'),
		'add_new' => _x('Add New', 'portfolio','zenite'),
		'add_new_item' => __('Add New Item','zenite'),
		'edit_item' => __('Edit Item','zenite'),
		'new_item' => __('New Portfolio Item','zenite'),
		'view_item' => __('View Item','zenite'),
		'search_items' => __('Search Portfolio Items','zenite'),
		'not_found' =>  __('Nothing found','zenite'),
		'not_found_in_trash' => __('Nothing found in Trash','zenite'),
		'parent_item_colon' => ''
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => null,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 55,
		'taxonomies' => array('portfolio_category'),
		'supports' => array('title','editor','thumbnail')
	  ); 

	register_post_type( 'portfolio' , $args );
}

function register_portfolio_category(){	
	
	register_taxonomy("portfolio_category", array('portfolio'), array(
			"hierarchical" => true,
			"label" => "Portfolio Categories",
			"singular_label" => "Portfolio Category",
			"rewrite" => true,
	));
};
?>
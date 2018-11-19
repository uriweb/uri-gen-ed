<?php
/*
Plugin Name: URI General Education Customizations
Plugin URI: https://www.uri.edu
Description: Custom taxonomies for the Gen Ed program
Version: 1.0
Author: John Pennypacker
Author URI: 
*/

// Block direct requests
if ( !defined('ABSPATH') )
	die('-1');

//define( 'URI_GENED_PATH', plugin_dir_path( __FILE__ ) );


/**
 * Define custom taxonomies for the Gen Ed site
 */
function uri_gened_custom_taxonomies() {

	register_taxonomy('programs', array (
		0 => 'post'
		), array(
			'hierarchical' => true,
			'label' => 'Programs',
			'show_ui' => true,
			'show_admin_column' => TRUE,
			'query_var' => true,
			'rewrite' => false,
			'singular_label' => 'Program',
			'labels' => array(
				'add_new_item' => __( 'Add New Program' ),
				'update_item' =>  __( 'Update Program' ),
				'view_item' =>  __( 'View Program' ),	
				'edit_item' =>  __( 'Edit Program' ),		
				'all_item' =>  __( 'All Programs' )
			)
		)
	);

	register_taxonomy('outcomes', array (
		0 => 'post'
		), array(
			'hierarchical' => true,
			'label' => 'Outcomes',
			'show_ui' => true,
			'show_admin_column' => TRUE,
			'query_var' => true,
			'rewrite' => false,
			'singular_label' => 'Outcome',
			'labels' => array(
				'add_new_item' => __( 'Add New Outcome' ),
				'update_item' =>  __( 'Update Outcome' ),
				'view_item' =>  __( 'View Outcome' ),	
				'edit_item' =>  __( 'Edit Outcome' ),		
				'all_item' =>  __( 'All Outcomes' )
			)
		)
	);

	register_taxonomy('years', array (
		0 => 'post'
		), array(
			'hierarchical' => true,
			'label' => 'Catalog Years',
			'show_ui' => true,
			'show_admin_column' => TRUE,
			'query_var' => true,
			'rewrite' => false,
			'singular_label' => 'Catalog Year',
			'labels' => array(
				'add_new_item' => __( 'Add New Catalog Year' ),
				'update_item' =>  __( 'Update Catalog Year' ),
				'view_item' =>  __( 'View Catalog Year' ),	
				'edit_item' =>  __( 'Edit Catalog Year' ),		
				'all_item' =>  __( 'All Catalog Years' )
			)
		)
	);

}
add_action('init', 'uri_gened_custom_taxonomies');
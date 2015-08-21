<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class RC_Stories_Taxonomies {

	public function __construct() {
		add_action( 'init', array( $this, 'program_taxonomy' ) );
	}

	public function program_taxonomy() {

		if ( taxonomy_exists( 'program' ) ) {
			return;
		}

		$labels = array(
			'name'                       => _x( 'Programs', 'Taxonomy General Name', 'wp-mapit' ),
			'singular_name'              => _x( 'Program', 'Taxonomy Singular Name', 'wp-mapit' ),
			'menu_name'                  => __( 'Programs', 'wp-mapit' ),
			'all_items'                  => __( 'All Programs', 'wp-mapit' ),
			'parent_item'                => __( 'Parent Program', 'wp-mapit' ),
			'parent_item_colon'          => __( 'Parent Program:', 'wp-mapit' ),
			'new_item_name'              => __( 'New Program Name', 'wp-mapit' ),
			'add_new_item'               => __( 'Add New Program', 'wp-mapit' ),
			'edit_item'                  => __( 'Edit Program', 'wp-mapit' ),
			'update_item'                => __( 'Update Program', 'wp-mapit' ),
			'view_item'                  => __( 'View Program', 'wp-mapit' ),
			'separate_items_with_commas' => __( 'Separate items with commas', 'wp-mapit' ),
			'add_or_remove_items'        => __( 'Add or remove items', 'wp-mapit' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'wp-mapit' ),
			'popular_items'              => __( 'Popular Programs', 'wp-mapit' ),
			'search_items'               => __( 'Search Programs', 'wp-mapit' ),
			'not_found'                  => __( 'Not Found', 'wp-mapit' ),
		);
		$args = array(
			'labels'            => $labels,
			'hierarchical'      => true,
			'public'            => false,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => false,
			'show_tagcloud'     => false,
		);

		register_taxonomy( 'program', array( 'recovery_stories', 'speaker_tapes' ), $args );
	}

}


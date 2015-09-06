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
			'name'                       => _x( 'Programs', 'Taxonomy General Name', 'rc-stories' ),
			'singular_name'              => _x( 'Program', 'Taxonomy Singular Name', 'rc-stories' ),
			'menu_name'                  => __( 'Programs', 'rc-stories' ),
			'all_items'                  => __( 'All Programs', 'rc-stories' ),
			'parent_item'                => __( 'Parent Program', 'rc-stories' ),
			'parent_item_colon'          => __( 'Parent Program:', 'rc-stories' ),
			'new_item_name'              => __( 'New Program Name', 'rc-stories' ),
			'add_new_item'               => __( 'Add New Program', 'rc-stories' ),
			'edit_item'                  => __( 'Edit Program', 'rc-stories' ),
			'update_item'                => __( 'Update Program', 'rc-stories' ),
			'view_item'                  => __( 'View Program', 'rc-stories' ),
			'separate_items_with_commas' => __( 'Separate items with commas', 'rc-stories' ),
			'add_or_remove_items'        => __( 'Add or remove items', 'rc-stories' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'rc-stories' ),
			'popular_items'              => __( 'Popular Programs', 'rc-stories' ),
			'search_items'               => __( 'Search Programs', 'rc-stories' ),
			'not_found'                  => __( 'Not Found', 'rc-stories' ),
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

		register_taxonomy( 'program', array( 'recovery-stories', 'speaker-tapes' ), $args );
	}

}


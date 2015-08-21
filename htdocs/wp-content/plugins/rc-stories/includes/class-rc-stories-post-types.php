<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class RC_Stories_Post_Types {

	public function __construct() {
		add_action( 'init', array( $this, 'recovery_stories_post_type' ) );
		add_action( 'init', array( $this, 'speaker_tapes_post_type' ) );
	}

	public function recovery_stories_post_type() {

		if ( post_type_exists( 'recovery_stories' ) ) {
			return;
		}

		$labels = array(
			'name'               => _x( 'Stories', 'Post Type General Name', 'rc_stories' ),
			'singular_name'      => _x( 'Story', 'Post Type Singular Name', 'rc_stories' ),
			'menu_name'          => __( 'Stories', 'rc_stories' ),
			'name_admin_bar'     => __( 'Stories', 'rc_stories' ),
			'parent_item_colon'  => __( 'Parent Item:', 'rc_stories' ),
			'all_items'          => __( 'All Stories', 'rc_stories' ),
			'add_new_item'       => __( 'Add Story', 'rc_stories' ),
			'add_new'            => __( 'Add New', 'rc_stories' ),
			'new_item'           => __( 'New Story', 'rc_stories' ),
			'edit_item'          => __( 'Edit Story', 'rc_stories' ),
			'update_item'        => __( 'Update Story', 'rc_stories' ),
			'view_item'          => __( 'View Story', 'rc_stories' ),
			'search_items'       => __( 'Search Stories', 'rc_stories' ),
			'not_found'          => __( 'Not found', 'rc_stories' ),
			'not_found_in_trash' => __( 'Not found in Trash', 'rc_stories' ),
		);
		$args   = array(
			'label'               => __( 'recovery_stories', 'rc_stories' ),
			'description'         => __( 'Default post type to map locations to maps', 'rc_stories' ),
			'labels'              => $labels,
			'supports'            => array(
				'title',
				'editor',
				'excerpt',
				'author',
				'thumbnail',
				'comments',
				'revisions',
				'custom-fields',
				'page-attributes',
				'post-formats',
			),
			'taxonomies'          => array( 'program', ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-book-alt',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => false,
			'exclude_from_search' => true,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
		);

		register_post_type( 'recovery_stories', $args );
	}

	public function speaker_tapes_post_type() {

		if ( post_type_exists( 'speaker_tapes' ) ) {
			return;
		}

		$labels = array(
			'name'               => _x( 'Speaker Tapes', 'Post Type General Name', 'rc_stories' ),
			'singular_name'      => _x( 'Speaker Tape', 'Post Type Singular Name', 'rc_stories' ),
			'menu_name'          => __( 'Speaker Tapes', 'rc_stories' ),
			'name_admin_bar'     => __( 'Speaker Tapes', 'rc_stories' ),
			'parent_item_colon'  => __( 'Parent Item:', 'rc_stories' ),
			'all_items'          => __( 'All Speaker Tapes', 'rc_stories' ),
			'add_new_item'       => __( 'Add Speaker Tape', 'rc_stories' ),
			'add_new'            => __( 'Add New', 'rc_stories' ),
			'new_item'           => __( 'New Speaker Tape', 'rc_stories' ),
			'edit_item'          => __( 'Edit Speaker Tape', 'rc_stories' ),
			'update_item'        => __( 'Update Speaker Tape', 'rc_stories' ),
			'view_item'          => __( 'View Speaker Tape', 'rc_stories' ),
			'search_items'       => __( 'Search Speaker Tapes', 'rc_stories' ),
			'not_found'          => __( 'Not found', 'rc_stories' ),
			'not_found_in_trash' => __( 'Not found in Trash', 'rc_stories' ),
		);
		$args   = array(
			'label'               => __( 'speaker_tapes', 'rc_stories' ),
			'description'         => __( 'Default post type to map locations to maps', 'rc_stories' ),
			'labels'              => $labels,
			'supports'            => array(
				'title',
				'editor',
				'excerpt',
				'author',
				'thumbnail',
				'comments',
				'revisions',
				'custom-fields',
				'page-attributes',
				'post-formats',
			),
			'taxonomies'          => array( 'program', ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-video-alt3',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => false,
			'exclude_from_search' => true,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
		);

		register_post_type( 'speaker_tapes', $args );
	}
}


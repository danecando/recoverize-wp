<?php
/*
Plugin Name: Recoverize Stories
Plugin URI: https://github.com/recoverize/rec-stories
Description: A plugin for speaker tape and recovery story content management
Version: 1.0.0
Author: Dane Grant <danecando@gmail.com>
Author URI: http://danecando.com
License: Copyright 2015 Recoverize 2.0, LLC.
*/


include( 'rc-stories-functions.php' );


if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


if ( ! class_exists( 'RC_Stories' ) ):

	class RC_Stories {

		/**
		 * Instance of RC_Stories
		 *
		 * @since 1.0.0
		 * @access private
		 * @var object $instance
		 */
		private static $instance;


		/**
		 * Plugin file path
		 *
		 * @since 1.0.0
		 * @var string $file
		 */
		public $file = __FILE__;


		/**
		 * Initialize the class
		 *
		 * @since 1.0.0
		 */
		public function __construct() {

			// Includes
			include( 'includes/class-rc-stories-post-types.php' );
			include( 'includes/class-rc-stories-taxonomies.php' );

			// Init classes
			$this->post_types = new RC_Stories_Post_Types();
			$this->taxonomies = new RC_Stories_Taxonomies();

			// Activation
			register_activation_hook( __FILE__, array( $this, 'activate' ) );

			// Actions
			add_action( 'wp_enqueue_scripts', array( $this, 'frontend_scripts' ) );

			// Filters
			add_filter( 'stories/get_post_id', 'get_post_id', 1, 1 );
		}

		/**
		 * Singleton
		 *
		 * An global instance of the class. Used to retrieve the instance
		 * to use on other files/plugins/themes.
		 *
		 * @since 1.0.0
		 * @return object
		 */
		public static function instance() {
			if ( is_null( self::$instance ) ) {
				self::$instance = new self();
			}

			return self::$instance;
		}

		/**
		 * Activates the plugin
		 *
		 * @since 1.0.0
		 */
		public function activate() {
			// register post types & taxonomies
			// flush_rewrite_rules()
		}

		/**
		 * Register and enqueue scripts and css for the frontend
		 *
		 * @since 1.0.0
		 * @return void
		 */
		public function frontend_scripts() {
			wp_enqueue_style( 'rec-speaker-tapes-style', plugins_url( 'assets/css/rc-stories.css', __FILE__ ) );
			wp_enqueue_script( 'rec-speaker-tapes-script', plugins_url( 'assets/js/rc-stories.js', __FILE__ ), array(
				'jquery'
			), '1.0.0', true );
		}

	}

	function rc_stories() {
		return RC_Stories::instance();
	}

	add_action( 'plugins_loaded', 'rc_stories' );

endif;
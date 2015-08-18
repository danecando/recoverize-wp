<?php
/*
Plugin Name: Recoverize Speaker Tapes
Plugin URI: https://github.com/recoverize/rec-speaker-tapes
Description: A plugin for speaker tape content management
Version: 1.0.0
Author: Dane Grant <danecando@gmail.com>
Author URI: http://danecando.com
License: GPL2
*/

if ( ! class_exists( 'Rec_Speaker_Tapes' ) ):

	class Rec_Speaker_Tapes {

		/**
		 * Instance of Rec_Speaker_Tapes
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

			// Init classes

			// Activation
			register_activation_hook( __FILE__, array( $this, 'activate' ) );

			// Actions
			add_action( 'wp_enqueue_scripts', array( $this, 'frontend_scripts' ) );

			// Filters
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
			wp_enqueue_style( 'rec-speaker-tapes-style', plugins_url( 'assets/css/rec-speaker-tapes.css', __FILE__ ) );
			wp_enqueue_script( 'rec-speaker-tapes-script', plugins_url( 'assets/js/rec-speaker-tapes.js', __FILE__ ), array(
				'jquery'
			), '1.0.0', true );
		}

	}

	function rec_speaker_tapes() {
		return Rec_Speaker_Tapes::instance();
	}

endif;
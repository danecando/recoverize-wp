<?php
/**
 * Standard: Ad
 *
 * @since Listify 1.0.0
 */
class Listify_Widget_Ad extends Listify_Widget {

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->widget_description = __( 'Display an advertisement', 'listify' );
		$this->widget_id          = 'listify_widget_ad';
		$this->widget_name        = __( 'Listify - Standard: Advertisement', 'listify' );
		$this->settings           = array(
			'title' => array(
				'type'  => 'text',
				'std'   => '',
				'label' => __( 'Title:', 'listify' )
			),
			'icon' => array(
				'type'    => 'select',
				'std'     => '',
				'label'   => __( 'Icon:', 'listify' ),
				'options' => $this->get_icon_list()
			),
			'code' => array(
				'type'    => 'textarea',
				'std'     => '',
				'label'   => __( 'Ad Code:', 'listify' )
			),
			'style' => array(
				'type'    => 'checkbox',
				'std'     => 0,
				'label'   => __( 'Remove box around widget', 'listify' )
			)
		);
		parent::__construct();
	}

	/**
	 * widget function.
	 *
	 * @see WP_Widget
	 * @access public
	 * @param array $args
	 * @param array $instance
	 * @return void
	 */
	function widget( $args, $instance ) {
		if ( $this->get_cached_widget( $args ) )
			return;

		extract( $args );

		$title = apply_filters( 'widget_title', $instance['title'], $instance, $this->id_base );
		$icon = isset( $instance[ 'icon' ] ) ? $instance[ 'icon' ] : null;
		$code = isset( $instance[ 'code' ] ) ? $instance[ 'code' ] : null;
		$style = isset( $instance[ 'style' ] ) && 1 == $instance[ 'style' ] ? 'unboxed' : 'boxed';

		if ( $icon ) {
			$before_title = sprintf( $before_title, 'ion-' . $icon );
		}

		ob_start();

		echo str_replace( 'class="widget', 'class="widget ' . $style, $before_widget );

		if ( $title ) echo $before_title . $title . $after_title;

		echo do_shortcode( $code );

		echo $after_widget;

		$content = ob_get_clean();

		echo apply_filters( $this->widget_id, $content );

		$this->cache_widget( $args, $content );
	}
}
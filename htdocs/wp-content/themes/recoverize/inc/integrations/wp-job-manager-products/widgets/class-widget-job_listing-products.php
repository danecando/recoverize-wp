<?php
/**
 * Job Listing: Products
 *
 * @since Listify 1.0.0
 */
class Listify_Widget_Listing_Products extends Listify_Widget {

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->widget_description = __( 'Display the listings products (sidebar)', 'listify' );
		$this->widget_id          = 'listify_widget_panel_listing_products';
		$this->widget_name        = __( 'Listify - Listing: Products (Sidebar)', 'listify' );
		$this->settings           = array(
			'title' => array(
				'type'  => 'text',
				'std'   => 'Related Products',
				'label' => __( 'Title:', 'listify' )
			),
			'icon' => array(
				'type'    => 'select',
				'std'     => 'bag',
				'label'   => __( 'Icon:', 'listify' ),
				'options' => $this->get_icon_list()
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

		global $job_manager, $post;

		if ( 'preview' == $post->post_status ) {
			return;
		}

		extract( $args );

		$products = get_post_meta( $post->ID, '_products', true );

		// Stop if there are no products
		if ( ! $products || ! is_array( $products ) ) :
			return;
		endif;

		$args = apply_filters( 'woocommerce_related_products_args', array(
			'post_type'            => 'product',
			'ignore_sticky_posts'  => 1,
			'no_found_rows'        => 1,
			'posts_per_page'       => -1,
			'post__in'             => $products,
		) );

		$products = new WP_Query( $args );

		$title = apply_filters( 'widget_title', $instance['title'], $instance, $this->id_base );
		$icon = isset( $instance[ 'icon' ] ) ? $instance[ 'icon' ] : null;

		if ( $icon ) {
			$before_title = sprintf( $before_title, 'ion-' . $icon );
		}

		ob_start();

		echo $before_widget;

		if ( $title ) echo $before_title . $title . $after_title;

		echo '<div class="woocommerce">';
		echo '<ul class="product_list_widget">';

		while ( $products->have_posts()) {
			$products->the_post();

			wc_get_template( 'content-widget-product.php' );
		}

		echo '</ul>';
		echo '</div>';

		echo $after_widget;

		$content = ob_get_clean();

		echo apply_filters( $this->widget_id, $content );

		wp_reset_query();

		$this->cache_widget( $args, $content );
	}
}

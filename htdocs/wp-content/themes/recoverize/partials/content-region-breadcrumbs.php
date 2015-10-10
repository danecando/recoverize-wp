<?php
/**
 * @todo turn this into an action or filter
 * @todo add classes based on results
 */
global $post;

define( 'TAXONOMY', 'job_listing_region' );

$regions = wp_get_object_terms( $post->ID, TAXONOMY );

if ( ! empty( $regions ) && ! is_wp_error( $regions ) && count( $regions ) > 0 ) {

	$parent = false;
	$child  = false;
	echo '<ul class="region-breadcrumbs">';
	foreach ( array_reverse( $regions ) as $region ) {
		if ( ! $parent && ! (bool) $region->parent ) {
			$parent = $region;
			echo '<li class="crumb root-crumb"><a href="' . get_term_link( $parent->term_id, TAXONOMY ) . '">' . $parent->name . '</a></li>';
		} else if ( ! $child ) {
			$child = $region;
			if ( ! $parent && isset( $child->parent ) ) {
				$parent = get_term_by( 'id', $child->parent, TAXONOMY );
				if ( is_object( $parent ) ) {
					echo '<li class="crumb root-crumb"><a href="' . get_term_link( $parent->term_id, TAXONOMY ) . '">' . $parent->name . '</a></li>';
				}
			}
			echo '<li><a href="' . get_term_link( $child->term_id, TAXONOMY ) . '">' . $child->name . '</a></li>';
		}
	}
	echo '</ul>';
}

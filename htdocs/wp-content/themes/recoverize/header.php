<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Listify
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="site-container">
	<div id="page" class="hfeed site">

		<header id="masthead" class="site-header" role="banner">
			<div id="top-bar">
				<div class="container">
					<?php wp_nav_menu( array(
						'theme_location' => 'top-bar-left',
						'container_class' => 'top-nav nav-left col-xs-6',
						'menu_class' => 'col-xs-6',
						'fallback_cb' => '',
						'depth' => 1
					) ); ?>
					<?php
					wp_nav_menu( array(
						'theme_location' => 'top-bar-right',
						'container_class' => 'top-nav nav-right col-xs-6',
						'depth'	=> 1
					) );
					?>
				</div>
			</div>
			<div class="primary-header">
				<div class="container">
					<div class="primary-header-inner">
						<div class="site-branding">
							<?php $header_image = get_header_image(); ?>
							<?php if ( ! empty( $header_image ) ) : ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="custom-header"><img src="<?php echo esc_url( $header_image ); ?>" alt=""></a>
							<?php endif; ?>

							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
						</div>

						<div class="primary nav-menu">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'primary',
									'container_class' => 'nav-menu-container'
								) );
							?>
						</div>
					</div>

					<?php if ( ! listify_has_integration( 'facetwp' ) && listify_theme_mod( 'nav-search' ) ) : ?>
					<div id="search-header" class="search-overlay">
						<div class="container">
							<?php locate_template( array( 'searchform-header.php', 'searchform.php' ), true, false ); ?>
							<a href="#search-header" data-toggle="#search-header" class="ion-close search-overlay-toggle"></a>
						</div>
					</div>
	                <?php endif; ?>
				</div>
			</div>

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<div class="container">
					<a href="#" class="navigation-bar-toggle">
						<i class="ion-navicon-round"></i>
						<?php echo listify_get_theme_menu_name( 'primary' ); ?>
					</a>

					<div class="navigation-bar-wrapper">
						<div id="icon-logo">
							<img src="<?php echo get_template_directory_uri() ?>/images/site_icon.png" alt=""/>
						</div>
						<?php
							wp_nav_menu( array(
								'theme_location' => 'primary',
								'container_class' => 'primary nav-menu',
								'menu_class' => 'primary nav-menu'
							) );

							wp_nav_menu( array(
								'theme_location' => 'secondary',
								'container_class' => 'secondary nav-menu',
								'menu_class' => 'secondary nav-menu'
							) );
						?>
						<div id="help-head">
							<span class="help-cta-copy">Contact</span> <a href="mailto:support@recoverize.com" class="help-line">support</a>
<!--							<span class="help-cta-copy">Get Treatment</span> <a href="tel:18004038932" class="help-line">1-844-311-7236</a>-->
						</div>
					</div>

					<?php if ( ! listify_has_integration( 'facetwp' ) && listify_theme_mod( 'nav-search' ) ) : ?>
						<a href="#search-navigation" data-toggle="#search-navigation" class="ion-search search-overlay-toggle"></a>

						<div id="search-navigation" class="search-overlay">
							<?php locate_template( array( 'searchform-header.php', 'searchform.php' ), true, false ); ?>
							<a href="#search-navigation" data-toggle="#search-navigation" class="ion-close search-overlay-toggle"></a>
						</div>
					<?php endif; ?>
				</div>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->

		<?php do_action( 'listify_content_before' ); ?>

		<div id="content" class="site-content">

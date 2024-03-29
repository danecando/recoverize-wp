<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Listify
 */
?>

		</div><!-- #content -->

		<div class="footer-wrapper">

			<?php if ( ! listify_is_job_manager_archive() ) : ?>

				<?php get_template_part( 'content', 'cta' ); ?>

				<?php get_template_part( 'content', 'aso' ); ?>

				<?php if ( is_active_sidebar( 'widget-area-footer-1' ) || is_active_sidebar( 'widget-area-footer-2' ) || is_active_sidebar( 'widget-area-footer-3' ) || is_active_sidebar( 'widget-area-footer-4' ) ) : ?>

					<footer class="site-footer-widgets">
						<div class="container">
							<div class="row">
								<div class="footer-widget-column col-xs-12 col-sm-12 col-lg-5">
									<?php dynamic_sidebar( 'widget-area-footer-1' ); ?>
								</div>
								<div class="footer-widget-column col-xs-12 col-sm-6 col-lg-3 col-lg-offset-1">
									<?php dynamic_sidebar( 'widget-area-footer-2' ); ?>
								</div>
								<div class="footer-widget-column col-xs-12 col-sm-6 col-lg-3">
									<?php dynamic_sidebar( 'widget-area-footer-3' ); ?>
								</div>
							</div>
							<div class="row">
								<div class="footer-widget-column col-xs-12 col-sm-12 col-lg-12">
									<?php dynamic_sidebar( 'widget-area-footer-4' ); ?>
								</div>
<!--								<div class="footer-widget-column col-xs-12 col-sm-6 col-lg-3 col-lg-offset-1">-->
<!--									--><?php //dynamic_sidebar( 'widget-area-footer-5' ); ?>
<!--								</div>-->
<!--								<div class="footer-widget-column col-xs-12 col-sm-6 col-lg-3">-->
<!--									--><?php //dynamic_sidebar( 'widget-area-footer-6' ); ?>
<!--								</div>-->
							</div>
						</div>
					</footer>

				<?php endif; ?>

			<?php endif; ?>

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="container">

					<div class="site-info">
						<?php echo listify_theme_mod( 'copyright-text' ); ?>
					</div><!-- .site-info -->

					<div class="site-social">
						<?php wp_nav_menu( array(
							'theme_location' => 'social',
							'menu_class' => 'nav-menu-social',
							'fallback_cb' => '',
							'depth' => 1
						) ); ?>
					</div>

				</div>
			</footer><!-- #colophon -->

		</div>

	</div><!-- #page -->

	<div id="ajax-response"></div>

	<?php wp_footer(); ?>
	</div>
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-45959088-1', 'auto');
	ga('send', 'pageview');

</script>
<!-- AdRoll SmartPixel -->
<script type="text/javascript">
	adroll_adv_id = "FVP6VPMSJBFWXKO7IQZ4PJ";
	adroll_pix_id = "HSSHXMINLVCVRD2NEQGRHX";
	(function () {
		var _onload = function(){
			if (document.readyState && !/loaded|complete/.test(document.readyState)){setTimeout(_onload, 10);return}
			if (!window.__adroll_loaded){__adroll_loaded=true;setTimeout(_onload, 50);return}
			var scr = document.createElement("script");
			var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
			scr.setAttribute('async', 'true');
			scr.type = "text/javascript";
			scr.src = host + "/j/roundtrip.js";
			((document.getElementsByTagName('head') || [null])[0] ||
			document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
		};
		if (window.addEventListener) {window.addEventListener('load', _onload, false);}
		else {window.attachEvent('onload', _onload)}
	}());
</script>
</body>
</html>

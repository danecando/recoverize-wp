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

			<?php if ( is_active_sidebar( 'widget-area-footer-1' ) || is_active_sidebar( 'widget-area-footer-2' ) || is_active_sidebar( 'widget-area-footer-3' ) ) : ?>

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

<!-- begin olark code -->
<script data-cfasync="false" type='text/javascript'>/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
		f[z]=function(){
			(a.s=a.s||[]).push(arguments)};var a=f[z]._={
		},q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
			f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
			0:+new Date};a.P=function(u){
			a.p[u]=new Date-a.p[0]};function s(){
			a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
			hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
			return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
			b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
			b.contentWindow[g].open()}catch(w){
			c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
			var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
			b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
		loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
	/* custom configuration goes here (www.olark.com/documentation) */
	olark.identify('7466-381-10-2266');/*]]>*/</script><noscript><a href="https://www.olark.com/site/7466-381-10-2266/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>
<!-- end olark code -->

<?php wp_footer(); ?>

</body>
</html>

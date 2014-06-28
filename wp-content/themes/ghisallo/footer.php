</section>
<footer class="row">
	<?php do_action('foundationPress_before_footer'); ?>
	<?php dynamic_sidebar("footer-widgets"); ?>
	<?php do_action('foundationPress_after_footer'); ?>
</footer>
<div class="footer" role="banner">
	<div class="row">
		<div class="small-12 large-8 columns">
			<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php bloginfo('template_url'); ?>/assets/img/ghisallo-logo.svg" alt="The Ghisallo Foundation" title="The Ghisallo Foundation"></a>
			<p>All rights reserved Copyright© 2014 &nbsp; | &nbsp;
			<a href="#">501(c)(3)</a> &nbsp; | &nbsp;  
			<a href="#">Legal</a> &nbsp; | &nbsp;   
			<a href="#">Privacy Policy</a> &nbsp; | &nbsp;
			<a href="#">Contact</a></p>
		</div>
		<div class="small-12 large-4 columns">
			<ul class="social">
				<li><a href="https://twitter.com/GhisalloFound" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/twitter.svg" alt="Twitter" title="Twitter"></a></li>
				<li><a href="https://www.facebook.com/GhisalloFoundation" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/facebook.svg" alt="Facebook" title="Facebook"></a></li>
				<li><a href="http://vimeo.com/ghisallo" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/vimeo.svg" alt="Vimeo" title="Vimeo"></a></li>
				<li><a href="http://instagram.com/ghisallofound" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/instagram.svg" alt="Vimeo" title="Vimeo"></a></li>
			</ul>
		</div>
    </div>
</div>

							<a class="exit-off-canvas"></a>
		  				<?php do_action('foundationPress_layout_end'); ?>
		 			 </div>
				</div>
			<?php wp_footer(); ?>
		<?php do_action('foundationPress_before_closing_body'); ?>
	</body>
</html>
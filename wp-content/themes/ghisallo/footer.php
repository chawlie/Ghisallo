</section>
<footer class="row">
	<?php do_action('foundationPress_before_footer'); ?>
	<?php dynamic_sidebar("footer-widgets"); ?>
	<?php do_action('foundationPress_after_footer'); ?>
</footer>
<div class="footer" role="banner">
	<div class="row">
		<div class="small-12 large-8 columns">
			<div class="footer-logo">
				<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php bloginfo('template_url'); ?>/assets/img/ghisallo-cycling-initiative-logo.svg" alt="Ghisallo Cycling Initiative" title="Ghisallo Cycling Initiative"></a>
			</div>
			<p>All rights reserved Copyright© 2014 &nbsp; | &nbsp;
			<a href="http://www.irs.gov/Charities-&-Non-Profits/Charitable-Organizations/Exemption-Requirements-Section-501%28c%29%283%29-Organizations">501(c)(3)</a> &nbsp; | &nbsp;
			<a href="<?php echo home_url( '/legal/' ); ?>">Legal</a> &nbsp; | &nbsp;
			<a href="<?php echo home_url( '/legal/privacy-policy/' ); ?>">Privacy Policy</a> &nbsp; | &nbsp;
			<a href="<?php echo home_url( '/contact/' ); ?>">Contact</a></p>
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

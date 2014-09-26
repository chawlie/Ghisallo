<aside id="sidebar" class="small-12 large-4 columns">
	<div class="subpage-nav">
			<?php do_action('foundationPress_before_sidebar'); ?>
			<?php dynamic_sidebar("sidebar-about"); ?>
			<?php do_action('foundationPress_after_sidebar'); ?>
	</div>
	<hr>
	<div class="sidebar-features">
		<aside>
			<img src="<?php bloginfo('template_url'); ?>/assets/img/img-side-donate.jpg">
			<h3>Give Us a Hand</h3>
			<p>We need additional funds to support our current youth programs and expand to new schools and community partners in addition to continued development of our Cycle Academy materials.</p>
			<p>We are also in need of used but usable kids bikes for our free youth Earn-A-Bike and Maintenance program we offer through Boys and Girls Club East Club.</p>
			<a href="<?php echo home_url();?>/donate/" class="button">Donate Now</a>
		</aside>
	</div>
</aside>
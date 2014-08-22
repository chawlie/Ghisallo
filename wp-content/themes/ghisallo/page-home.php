<?php
/*
Template Name: Home Page
*/
get_header(); ?>
 
<section class="homepage-hero">
	<div class="row">
		<div class="small-12 medium-12 columns">
			<h1> Educating and developing youth riders into cycling experts who integrate bicycling into their daily lives.</h1>
		</div>
	</div>
</section>
<section class="donate-volunteer-feature">
	<div class="row">
		<div class="hide-for-small medium-6 columns">
			<h2>We welcome your support! </h2>
		</div>
		<div class="small-6 medium-3 columns">
			<a href="<?php echo home_url();?>/donate/" class="button small">Donate</a>
		</div>
		<div class="small-6 medium-3 columns">	
			<a href="<?php echo home_url();?>/volunteer/" class="button small">Volunteer</a>
		</div>
	</div>
</section>
<section class="programs-feature">
	<div class="fullWidth row">
		<div class="small-12 medium-3 columns">
		<img src="<?php bloginfo('template_url'); ?>/assets/img/ghisallo-bird.svg" alt="The Ghisallo Foundation" title="The Ghisallo Foundation">
		</div>
		<div class="small-12 medium-9 columns">
			<h1>Over 1,922 youth participants</h1>
			<p>have attended our bicycle riding, maintenance, and safety <a href="#">Bike Clubs</a> and <a href="#">Earn-A-Bike</a> classes since 2013.</p>
		</div>
	</div>
</section>
<section class="bikerodeo-feature">
	<div class="row">
		<div class="small-12 medium-12 columns">
			<span>293</span><p> more took part in our high volume <a href="#">Bike Rodeos</a> and clinics!</p>
		</div>
	</div>
</section>
<!-- <section class="video-feature">
	<div class="row">
		<div class="small-12 medium-12 columns">
			<style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; height: auto; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style>
			<div class='embed-container'>
				<iframe src='http://www.youtube.com/embed/iTBYJRG6Lcg' frameborder='0' allowfullscreen></iframe>
			</div>
		</div>
	</div>
</section> -->
<section class="content">
	<div class="row">
		<div class="small-12 medium-5 push-3 columns" role="main">
		
		<?php do_action('foundationPress_before_content'); ?>
		
		<?php while (have_posts()) : the_post(); ?>
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<header>
					<!-- <h1 class="entry-title"><?php the_title(); ?></h1> -->
					<h2>Our core focus is youth bicycling skills &amp; cycling education.</h2>
				</header>
				<?php do_action('foundationPress_page_before_entry_content'); ?>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
				<footer>
					<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
					<p><?php the_tags(); ?></p>
				</footer>
				<?php do_action('foundationPress_page_before_comments'); ?>
				<?php comments_template(); ?>
				<?php do_action('foundationPress_page_after_comments'); ?>
			</article>
		<?php endwhile;?>

		<?php do_action('foundationPress_after_content'); ?>

		</div>

		<div class="program-links small-12 medium-3 pull-5 columns" role="main">
			<h3>Bike Club</h3>
			<p><a href="#">Find a club and learn more about:</a></p>
			<ul>
				<li>Safety</a></li>
				<li>Maintenance</li>
				<li>Exporation</li>
			</ul>
			<br>
			<img src="<?php bloginfo('template_url'); ?>/assets/img/gears.svg">
			<hr>
			<h3>Earn-a-Bike</h3>
			<p><a href="#">Learn how to build and maintain your bike.</a></p>
			<img src="<?php bloginfo('template_url'); ?>/assets/img/bikes.svg">
			<hr>
			<h3>Email News</h3>
			<p>Sign up to recieve email news and updates.</p>
			<a href="<?php echo home_url();?>/email-signup/" class="button">Sign Up for News</a>
		</div>

		<div class="small-12 medium-4 columns" role="main">
			<h3>We Need your Help!</h3>
			<p>We need additional funds to support our current youth programs and expand to new schools and community partners in addition to continued development of our Cycle Academy materials. We are also in need of used but usable kids bikes for our free youth Earn-A-Bike and Maintenance program we offer through Boys and Girls Club East Club.</p> 
		    <a href="<?php echo home_url();?>/donate/" class="button">Donate to Ghisallo Foundation</a>
		</div>
	</div>
</section>
<section class="testimonial">
	<div class="row">
		<div class="small-12 columns">
			<?php echo do_shortcode('[testimonialswidget_widget]'); ?>			
		</div>
	</div>
</section>
<?php get_footer(); ?>
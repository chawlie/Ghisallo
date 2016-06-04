<?php
/*
Template Name: Home Page
*/
get_header(); ?>

<section class="homepage-hero">
	<div class="row">
		<div class="small-12 medium-12 columns">
			<h1><?php the_field('hero_headline'); ?></h1>
		</div>
	</div>
</section>
<section class="donate-volunteer-feature">
	<div class="row">
		<div class="hide-for-small medium-6 columns text-center">
			<h2>Get Involved </h2>
		</div>
		<div class="small-6 medium-3 columns donate-button">
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
			<h1>Over <?php the_field('participants'); ?> youth participants</h1>
			<p>have attended our bicycle riding, maintenance, and safety <a href="<?php echo home_url();?>/services/classes/bike-club/">Bike Club</a> and <a href="<?php echo home_url();?>/services/classes/earn-a-bike/">Earn-A-Bike</a> classes since 2013.</p>
		</div>
	</div>
</section>
<section class="bikerodeo-feature">
	<div class="row">
		<div class="small-12 medium-12 small-centered columns">
			<span><?php the_field('bike_rodeos'); ?></span><p> more have taken part in our <a href="<?php echo home_url();?>/services/clinics/bike-rodeo/">Bike Rodeos</a> and clinics!</p>
		</div>
	</div>
</section>
<section class="video-feature">
	<div class="row">
		<div class="small-12 medium-12 columns">
			<h2>We envision a community where youth become lifelong expert cyclists and safety-conscious riders.</h2>
			<div class="tabs-content">
				<div class="content active" id="panel-video-1">
					<div class="flex-video">
						<iframe src="https://player.vimeo.com/video/105975324?title=0&byline=0&portrait=0" width="960" height="540" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
				</div>
				<div class="content" id="panel-video-2">
					<div class="flex-video">
						<iframe src="https://player.vimeo.com/video/105774258" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
				</div>
				<div class="content" id="panel-video-3">
					<div class="flex-video">
						<iframe src="https://player.vimeo.com/video/105774259" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
				</div>
				<div class="content" id="panel-video-4">
					<div class="flex-video">
						<iframe src="https://player.vimeo.com/video/105774257?title=0&byline=0&portrait=0" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
				</div>
				<dl class="tabs" data-tab>
					<dd class="active"><a href="#panel-video-1">Introduction</a></dd>
					<dd><a href="#panel-video-2">Apprentice</a></dd>
					<dd><a href="#panel-video-3">Bike Club</a></dd>
					<dd><a href="#panel-video-4">Earn a Bike</a></dd>
				</dl>
			</div>
		</div>
	</div>
</section>
<section class="content">
	<div class="row">
		<div class="small-12 medium-7 columns" role="main">

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

		<div class="program-links small-12 medium-5 columns" role="main">
			<h3>Bike Club</h3>
			<p><a href="<?php echo home_url();?>/services/classes/bike-club/">Find a club and learn more about:</a></p>
			<ul>
				<li>Safety</a></li>
				<li>Maintenance</li>
				<li>Exploration</li>
			</ul>
			<br>
			<img src="<?php bloginfo('template_url'); ?>/assets/img/gears.svg">
			<hr>
			<h3>Earn-a-Bike</h3>
			<p><a href="<?php echo home_url();?>/services/classes/earn-a-bike/">Learn how to build and maintain your bike.</a></p>
			<img src="<?php bloginfo('template_url'); ?>/assets/img/bikes.svg">
			<hr>
			<h3>Email News</h3>
			<p>Sign up to recieve email news and updates.</p>
			<a href="<?php echo home_url();?>/email-signup/" class="button">Sign Up for News</a>
		</div>
	</div>
</section>
<section class="donate-feature">
	<div class="row">
		<div class="column">
			<div class="panel clearfix">
				<div class="small-12 medium-5 columns" role="main">
					<img src="<?php bloginfo('template_url'); ?>/assets/img/bike-kids.jpg">
				</div>
				<div class="small-12 medium-7 columns" role="main">
				    <h3>We Need Your Help!</h3>
					<p>We need additional funds to support our current youth programs and expand to new schools and community partners in addition to continued development of our Cycle Academy materials. We are also in need of used but usable kids bikes for our free youth Earn-A-Bike and Maintenance program we offer through Boys and Girls Club East Club.</p>
				    <a href="<?php echo home_url();?>/donate/donation-information/" class="button">Find Out More</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="home-sponsors">
	<div class="row">
		<div class="small-6 columns text-left">
			<h3>Our Sponsors</h3>
		</div>
		<div class="small-6 columns text-right">
			<a href="<?php echo home_url();?>/about/sponsors/" class="button see-more-button">See All Sponsors</a>
		</div>
		<div class="small-12 columns">
			<div class="slideshow">
				<?php $my_query = new WP_Query('cat=328&post_type=sponsors&orderby=rand'); ?>
				<?php while ($my_query->have_posts()): $my_query->the_post(); ?>
					<?php
						$sponsor_logo = get_field('sponsor_logo');
						$sponsor_name = get_field('sponsor_name');
					?>
					<div class="spnsr-container">
						<div class="spnsr-logo">
							<?php if (!empty($sponsor_logo)): ?>
								<a href="<?php echo home_url();?>/about/sponsors/"><img src="<?= $sponsor_logo ?>" title="<?= $sponsor_name ?>"></a>
							<?php endif; ?>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
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

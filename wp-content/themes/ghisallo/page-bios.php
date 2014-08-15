<?php
/*
Template Name: Staff & Bios
*/
get_header(); ?>
<div class="row sub-page-container">
	<div class="small-12 medium-10 push-1 columns" role="main">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
<!-- 		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php comments_template(); ?>
		</article>
 --> 		<div class="row">
 			<h1>Instructors</h1>
 			<div class="row bio">
	 			<div class="large-4 columns">
	 				<a href="#" data-reveal-id="myModal"><img src="http://placehold.it/400x450"></a>
	 				<h1>Christopher Stanton</h1>
	 				<a href="#" data-reveal-id="myModal" class="round alert label">BIO</a>
	 				<p>Executive Director &amp; Founder</p>
					<p>christopher@ghisall.org</p>
					<p>512-576-3812</p>
					<p>LCI, Red Cross First Aid, etc</p>
	 			</div>
	 			<div class="large-4 columns">
	 				<a href="#" data-reveal-id="myModal"><img src="http://placehold.it/400x450"></a>
	 				<h1>Christopher Stanton</h1>
	 				<a href="#" data-reveal-id="myModal" class="round alert label">BIO</a>
	 				<p>Executive Director &amp; Founder</p>
					<p>christopher@ghisall.org</p>
					<p>512-576-3812</p>
					<p>LCI, Red Cross First Aid, etc</p>
	 			</div>
	 			<div class="large-4 columns">
	 				<a href="#" data-reveal-id="myModal"><img src="http://placehold.it/400x450"></a>
	 				<h1>Christopher Stanton</h1>
	 				<a href="#" data-reveal-id="myModal" class="round alert label">BIO</a>
	 				<p>Executive Director &amp; Founder</p>
					<p>christopher@ghisall.org</p>
					<p>512-576-3812</p>
					<p>LCI, Red Cross First Aid, etc</p>
	 			</div>
	 			<div class="large-4 columns">
	 				<a href="#" data-reveal-id="myModal"><img src="http://placehold.it/400x450"></a>
	 				<h1>Christopher Stanton</h1>
	 				<a href="#" data-reveal-id="myModal" class="round alert label">BIO</a>
	 				<p>Executive Director &amp; Founder</p>
					<p>christopher@ghisall.org</p>
					<p>512-576-3812</p>
					<p>LCI, Red Cross First Aid, etc</p>
	 			</div>
	 			<div class="large-4 columns">
	 				<a href="#" data-reveal-id="myModal"><img src="http://placehold.it/400x450"></a>
	 				<h1>Christopher Stanton</h1>
	 				<a href="#" data-reveal-id="myModal" class="round alert label">BIO</a>
	 				<p>Executive Director &amp; Founder</p>
					<p>christopher@ghisall.org</p>
					<p>512-576-3812</p>
					<p>LCI, Red Cross First Aid, etc</p>
	 			</div>
	 			<div class="large-4 columns">
	 				<a href="#" data-reveal-id="myModal"><img src="http://placehold.it/400x450"></a>
	 				<h1>Christopher Stanton</h1>
	 				<a href="#" data-reveal-id="myModal" class="round alert label">BIO</a>
	 				<p>Executive Director &amp; Founder</p>
					<p>christopher@ghisall.org</p>
					<p>512-576-3812</p>
					<p>LCI, Red Cross First Aid, etc</p>
	 			</div>
 			</div>
 			<h1>Apprentices</h1>
 			<div class="row bio">
	 			<div class="large-4 columns">
	 				<a href="#" data-reveal-id="myModal"><img src="http://placehold.it/400x450"></a>
	 				<h1>Christopher Stanton</h1>
	 				<a href="#" data-reveal-id="myModal" class="round alert label">BIO</a>
	 				<p>Executive Director &amp; Founder</p>
					<p>christopher@ghisall.org</p>
					<p>512-576-3812</p>
					<p>LCI, Red Cross First Aid, etc</p>
	 			</div>
	 			<div class="large-4 columns">
	 				<a href="#" data-reveal-id="myModal"><img src="http://placehold.it/400x450"></a>
	 				<h1>Christopher Stanton</h1>
	 				<a href="#" data-reveal-id="myModal" class="round alert label">BIO</a>
	 				<p>Executive Director &amp; Founder</p>
					<p>christopher@ghisall.org</p>
					<p>512-576-3812</p>
					<p>LCI, Red Cross First Aid, etc</p>
	 			</div>
	 			<div class="large-4 columns">
	 				<a href="#" data-reveal-id="myModal"><img src="http://placehold.it/400x450"></a>
	 				<h1>Christopher Stanton</h1>
	 				<a href="#" data-reveal-id="myModal" class="round alert label">BIO</a>
	 				<p>Executive Director &amp; Founder</p>
					<p>christopher@ghisall.org</p>
					<p>512-576-3812</p>
					<p>LCI, Red Cross First Aid, etc</p>
	 			</div>
	 			<div class="large-4 columns">
	 				<a href="#" data-reveal-id="myModal"><img src="http://placehold.it/400x450"></a>
	 				<h1>Christopher Stanton</h1>
	 				<a href="#" data-reveal-id="myModal" class="round alert label">BIO</a>
	 				<p>Executive Director &amp; Founder</p>
					<p>christopher@ghisall.org</p>
					<p>512-576-3812</p>
					<p>LCI, Red Cross First Aid, etc</p>
	 			</div>
	 			<div class="large-4 columns">
	 				<a href="#" data-reveal-id="myModal"><img src="http://placehold.it/400x450"></a>
	 				<h1>Christopher Stanton</h1>
	 				<a href="#" data-reveal-id="myModal" class="round alert label">BIO</a>
	 				<p>Executive Director &amp; Founder</p>
					<p>christopher@ghisall.org</p>
					<p>512-576-3812</p>
					<p>LCI, Red Cross First Aid, etc</p>
	 			</div>
	 			<div class="large-4 columns">
	 				<a href="#" data-reveal-id="myModal"><img src="http://placehold.it/400x450"></a>
	 				<h1>Christopher Stanton</h1>
	 				<a href="#" data-reveal-id="myModal" class="round alert label">BIO</a>
	 				<p>Executive Director &amp; Founder</p>
					<p>christopher@ghisall.org</p>
					<p>512-576-3812</p>
					<p>LCI, Red Cross First Aid, etc</p>
	 			</div>
 			</div>
 			<h1>Board Members</h1>
 			<div class="row bio">
	 			<div class="large-4 columns">
	 				<a href="#" data-reveal-id="myModal"><img src="http://placehold.it/400x450"></a>
	 				<h1>Christopher Stanton</h1>
	 				<a href="#" data-reveal-id="myModal" class="round alert label">BIO</a>
	 				<p>Executive Director &amp; Founder</p>
					<p>christopher@ghisall.org</p>
					<p>512-576-3812</p>
					<p>LCI, Red Cross First Aid, etc</p>
	 			</div>
	 			<div class="large-4 columns">
	 				<a href="#" data-reveal-id="myModal"><img src="http://placehold.it/400x450"></a>
	 				<h1>Christopher Stanton</h1>
	 				<a href="#" data-reveal-id="myModal" class="round alert label">BIO</a>
	 				<p>Executive Director &amp; Founder</p>
					<p>christopher@ghisall.org</p>
					<p>512-576-3812</p>
					<p>LCI, Red Cross First Aid, etc</p>
	 			</div>
	 			<div class="large-4 columns">
	 				<a href="#" data-reveal-id="myModal"><img src="http://placehold.it/400x450"></a>
	 				<h1>Christopher Stanton</h1>
	 				<a href="#" data-reveal-id="myModal" class="round alert label">BIO</a>
	 				<p>Executive Director &amp; Founder</p>
					<p>christopher@ghisall.org</p>
					<p>512-576-3812</p>
					<p>LCI, Red Cross First Aid, etc</p>
	 			</div>
	 			<div class="large-4 columns">
	 				<a href="#" data-reveal-id="myModal"><img src="http://placehold.it/400x450"></a>
	 				<h1>Christopher Stanton</h1>
	 				<a href="#" data-reveal-id="myModal" class="round alert label">BIO</a>
	 				<p>Executive Director &amp; Founder</p>
					<p>christopher@ghisall.org</p>
					<p>512-576-3812</p>
					<p>LCI, Red Cross First Aid, etc</p>
	 			</div>
	 			<div class="large-4 columns">
	 				<a href="#" data-reveal-id="myModal"><img src="http://placehold.it/400x450"></a>
	 				<h1>Christopher Stanton</h1>
	 				<a href="#" data-reveal-id="myModal" class="round alert label">BIO</a>
	 				<p>Executive Director &amp; Founder</p>
					<p>christopher@ghisall.org</p>
					<p>512-576-3812</p>
					<p>LCI, Red Cross First Aid, etc</p>
	 			</div>
	 			<div class="large-4 columns">
	 				<a href="#" data-reveal-id="myModal"><img src="http://placehold.it/400x450"></a>
	 				<h1>Christopher Stanton</h1>
	 				<a href="#" data-reveal-id="myModal" class="round alert label">BIO</a>
	 				<p>Executive Director &amp; Founder</p>
					<p>christopher@ghisall.org</p>
					<p>512-576-3812</p>
					<p>LCI, Red Cross First Aid, etc</p>
	 			</div>
 			</div>
 		</div>

		<div id="myModal" class="row reveal-modal" data-reveal>
		  <h2>Christopher Stanton</h2>
		  <div class="row">
		  	<div class="large-5 columns hide-for-medium-down">
			  <img src="http://placehold.it/400x450">
			</div>
			<div class="large-7 columns">
			  <p class="lead">Chistopher is awesome. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			  </div>
		  	</div>
		  	<a class="close-reveal-modal">&#215;</a>
		  </div>
		</div>

	<?php endwhile; // End the loop ?>

	</div>
</div>
		
<?php get_footer(); ?>
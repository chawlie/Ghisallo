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
 --> 		<div class="staff-bios">
 			<h1>Instructors</h1>
 			<div class="row bio">
	 			<div class="small-12 large-4 columns bio-grid">
	 				<h1>Christopher Stanton</h1>
	 				<p>Executive Director &amp; Founder</p>
					<p>christopher@ghisall.org</p>
					<p>512-576-3812</p>
					<p>LCI, Red Cross First Aid</p>
	 			</div>
	 			<div class="large-4 columns bio-grid">
	 				<h1>Noni Jarnagin</h1>
	 				<p>Instructor, Volunteer Coordinator</p>
					<p>noni.jarnagin@ghisallo.org</p>
					<p>512-470-9367</p>
					<p>LCI, OSHA First Aid</p>
	 			</div>
	 			<div class="large-4 columns bio-grid">
	 				<h1>Stephen Bonett</h1>
	 				<p>Instructor</p>
					<p>EMT</p>
	 			</div>
	 			<div class="large-4 columns bio-grid">
	 				<h1>Erin Cooper</h1>
	 				<p>Instructor</p>
	 			</div>
	 			<div class="large-4 columns bio-grid">
	 				<h1>Larry Murphy</h1>
	 				<p>Instructor</p>
	 			</div>
	 			<div class="large-4 columns bio-grid">
	 				<h1>Jake Bapple</h1>
	 				<p>Assistant Instructor, Content Development</p>
	 			</div>
	 			<div class="large-4 columns bio-grid">
	 				<h1>Shaylee Walsh</h1>
	 				<p>Assistant Instructor</p>
	 			</div>
	 			<div class="large-4 columns bio-grid">
	 				<h1>Jake Carsten</h1>
	 				<p>Off-Road Instructor</p>
	 				<p>IMBA</p>
	 			</div>
 			</div>
 			<h1>Apprentices and Assistants</h1>
 			<div class="row bio">
	 			<div class="large-4 columns bio-grid">
	 				<h1>Se’Daruis Rodgers</h1>
	 				<p>Apprentice Mechanic, Apprentice Instructor</p>
	 			</div>
	 			<div class="large-4 columns bio-grid">
	 				<h1>Denzel Dawkins</h1>
	 				<p>Shop Assistant</p>
	 			</div>
	 			<div class="large-4 columns bio-grid">
	 				<h1>Larinz Demps</h1>
	 				<p>Shop Assistant</p>
	 			</div>
 			</div>
 			<h1>Staff</h1>
 			<div class="row bio">
	 			<div class="large-4 columns bio-grid">
	 				<h1>Charlie Chauvin</h1>
	 				<p>Web Design &amp; Art Direction</p>
	 			</div>
	 			<div class="large-4 columns bio-grid">
	 				<h1>Eryn Moris</h1>
	 				<p>Copy Editor</p>
	 			</div>
 			</div>
 			<h1>Board Members</h1>
 			<div class="row bio">
	 			<div class="large-4 columns bio-grid">
	 				<h1>Cary Choate</h1>
	 				<p>Board Chair</p>
	 			</div>
	 			<div class="large-4 columns bio-grid">
	 				<h1>Mitchell Kilbey</h1>
	 				<p>Board Vice Chair</p>
	 			</div>
	 			<div class="large-4 columns bio-grid">
	 				<h1>Mary Stanton</h1>
	 				<p>Board Treasurer</p>
	 			</div>
	 			<div class="large-4 columns bio-grid">
	 				<h1>Daniel Curtin</h1>
	 				<p>Board Secretary</p>
	 			</div>
	 			<div class="large-4 columns bio-grid">
	 				<h1>Zach Bolian</h1>
	 				<p>Board</p>
	 			</div>
 			</div>
 		</div>

		
	<?php endwhile; // End the loop ?>

	</div>
</div>
		
<?php get_footer(); ?>

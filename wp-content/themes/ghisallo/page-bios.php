<?php
/*
Template Name: Staff & Bios
*/
get_header(); ?>
<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
<div class="title-bar">
	<div class="row">
		<div class="small-12 columns" role="main">
		<h1><h1 class="entry-title"><?php the_title(); ?></h1></h1>
		</div>
	</div>
</div>
<div class="row sub-page-container">
	<div class="small-12 medium-8 columns" role="main">
	
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
					<p><a href="mailto:christopher.stanton@ghisallo.org">christopher@ghisallo.org</a></p>
					<p>512-576-3812</p>
					<p>LCI, Red Cross First Aid</p>
	 			</div>
	 			<div class="large-4 columns bio-grid">
	 				<h1>Noni Jarnagin</h1>
	 				<p>Instructor, Volunteer Coordinator</p>
					<p><a href="mailto:noni.jarnagin@ghisallo.org">noni.jarnagin@ghisallo.org</a></p>
					<p>512-588-2321</p>
					<p>LCI, OSHA First Aid</p>
	 			</div>
	 			<div class="large-4 columns bio-grid">
	 				<h1>Jake Bapple</h1>
	 				<p>Instructor, Content Development</p>
	 			</div>
	 			<div class="large-4 columns bio-grid">
	 				<h1>Erin Cooper</h1>
	 				<p>Instructor</p>
	 			</div>
	 			<div class="large-4 columns bio-grid">
	 				<h1>Will Rogers III</h1>
	 				<p>Instructor</p>
	 			</div>
	 			<div class="large-4 columns bio-grid">
	 				<h1>Armando Martinez</h1>
	 				<p>Assistant Instructor</p>
	 			</div>
	 			<div class="large-4 columns bio-grid">
	 				<h1>Larry Murphy</h1>
	 				<p>Subtitute Instructor</p>
	 			</div>
	 			<div class="large-4 columns bio-grid">
	 				<h1>Shaylee Walsh</h1>
	 				<p>Subtitute Instructor</p>
	 			</div>
	 			<div class="large-4 columns bio-grid">
	 				<h1>Stephen Bonett</h1>
	 				<p>Substitute Instructor</p>
					<p>EMT</p>
	 			</div>
	 			<div class="large-4 columns bio-grid">
	 				<h1>Jake Carsten</h1>
	 				<p>Off-Road Instructor</p>
	 				<p>IMBA</p>
	 			</div>
 			</div>
 			<h1>Apprentices and Assistants</h1>
 			<div class="row bio">
<!--
	 			<div class="large-4 columns bio-grid">
	 				<h1>Se’Daruis Rodgers</h1>
	 				<p>Apprentice Mechanic, Apprentice Instructor</p>
	 			</div>
-->
	 			<div class="large-4 columns bio-grid">
	 				<h1>Denzel Dawkins</h1>
	 				<p>Shop Assistant</p>
	 			</div>
	 			<div class="large-4 columns bio-grid">
	 				<h1>Larinz Demps</h1>
	 				<p>Shop Assistant</p>
	 			</div>
	 			<div class="large-4 columns bio-grid">
	 				<h1>Triniti Glasco</h1>
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
	 				<h1>Zach Bolian</h1>
	 				<p>Chair</p>
	 			</div>
	 			<div class="large-4 columns bio-grid">
	 				<h1>Mitchell Kilbey</h1>
	 				<p>Vice Chair</p>
	 			</div>
	 			<div class="large-4 columns bio-grid">
	 				<h1>Mary Stanton</h1>
	 				<p>Treasurer</p>
	 			</div>
	 			<div class="large-4 columns bio-grid">
	 				<h1>Jana Sturdivant</h1>
	 				<p>Secretary</p>
	 			</div>
	 			<div class="large-4 columns bio-grid">
	 				<h1>Cary Choate</h1>
	 				<p>Member</p>
	 			</div>
	 			<div class="large-4 columns bio-grid">
	 				<h1>Llyas Salahud-Din</h1>
	 				<p>Member</p>
	 			</div>
	 			<div class="large-4 columns bio-grid">
	 				<h1>Rolando Roman</h1>
	 				<p>Member</p>
	 			</div>
 			</div>
 		</div>
		<?php endwhile; // End the loop ?>
	</div>
	<?php get_sidebar(about); ?>
</div>
		
<?php get_footer(); ?>

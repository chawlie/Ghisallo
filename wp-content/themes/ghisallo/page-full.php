<?php
/*
Template Name: Full Width
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
	<div class="small-12 medium-10 columns">
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<div class="entry-content">
			</header>
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php comments_template(); ?>
		</article>
	<?php endwhile; // End the loop ?>

	</div>
</div>
		
<?php get_footer(); ?>
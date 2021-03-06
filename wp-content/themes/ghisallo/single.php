<?php get_header(); ?>
<div class="title-bar">
	<div class="row">
		<div class="small-12 columns" role="main">
		<h1>News</h1>
		</div>
	</div>
</div>
<div class="row sub-page-container">
	<div class="small-12 medium-9 columns" role="main">
	
	<?php do_action('foundationPress_before_content'); ?>
	
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<!-- <?php FoundationPress_entry_meta(); ?> -->
			</header>
			<div class="entry-content">
						
			<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
				<p class="tags"><?php the_tags(); ?></p>
			</footer>
			<?php do_action('foundationPress_post_before_comments'); ?>
			<?php comments_template(); ?>
			<?php do_action('foundationPress_post_after_comments'); ?>
		</article>
	<?php endwhile;?>
	
	<?php do_action('foundationPress_after_content'); ?>

	</div>
<!-- 	<?php get_sidebar(); ?>
 --></div>	
<?php get_footer(); ?>
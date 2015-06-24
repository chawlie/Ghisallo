<?php get_header(); ?>
<div class="title-bar">
	<div class="row">
		<div class="small-12 columns" role="main">
		<h1>Search</h1>
		</div>
	</div>
</div>
<div class="row sub-page-container">
	<div class="small-12 large-8 columns" role="main">
		
	<?php if ( have_posts() ) : ?>
		
		<?php do_action('foundationPress_before_content'); ?>
	
		<?php while ( have_posts() ) : the_post(); ?>
			<article class="news-post"> 
				<h2 class="post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
				<div class="post-meta">
					<?php the_time('l, F jS, Y') ?> at <?php the_time() ?>
				</div>
				<div class="post-content">
					<a href="<?php the_permalink();?>" class="post-thumb"><?php the_post_thumbnail(); ?></a>
					<?php the_excerpt(); ?>
					<a href="<?php the_permalink();?>" class="button">Read More</a>
				</div>
				<hr>
			</article>
		<?php endwhile; ?>
		
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		
		<?php do_action('foundationPress_before_pagination'); ?>
		
	<?php endif;?>
	
	
	
	<?php if ( function_exists('FoundationPress_pagination') ) { FoundationPress_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'FoundationPress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'FoundationPress' ) ); ?></div>
		</nav>
	<?php } ?>
	
	<?php do_action('foundationPress_after_content'); ?>
	
	</div>
	<?php get_sidebar(); ?>
</div>	
<?php get_footer(); ?>
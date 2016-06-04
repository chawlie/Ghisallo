<?php
/*
Template Name: Sponsor Logos
*/
get_header(); ?>

<?php do_action('foundationPress_before_content'); ?>
<?php while (have_posts()) : the_post(); ?>
<div class="title-bar">
	<div class="row">
		<div class="small-12 columns" role="main">
		<h1><h1 class="entry-title"><?php the_title(); ?></h1></h1>
		</div>
	</div>
</div>
<div class="row sub-page-container">
	<div class="small-12 large-8 columns" role="main">
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<?php do_action('foundationPress_page_before_entry_content'); ?>
			<div class="entry-content spnsr-logos">
				<?php the_content(); ?>
			</div>

			<section class="sponsor-levels">
				<h2>Diamond Sponsors</h2>
				<hr>
				<div class="row diamond-sponsors">
					<?php $my_query = new WP_Query('cat=322&post_type=sponsors&orderby=menu_order&order=ASC&posts_per_page=999'); ?>
					<?php while ($my_query->have_posts()): $my_query->the_post(); ?>
						<?php
							$sponsor_logo = get_field('sponsor_logo');
							$sponsor_name = get_field('sponsor_name');
							$sponsor_link = get_field('sponsor_link');
						?>
						<?php if (!empty($sponsor_logo)): ?>
							<div class="columns small-6 medium-4">
								<div class="spnsr-container">
									<div class="spnsr-logo">
										<?php if (!empty($sponsor_logo)): ?>
											<a href="http://<?= $sponsor_link ?>"><img src="<?= $sponsor_logo ?>" title="<?= $sponsor_name ?>"></a>
										<?php endif; ?>
									</div>
								</div>
							</div>
						<?php endif; ?>
					<?php endwhile; ?>
				</div>
			</section>

			<section class="sponsor-levels">
				<h2>Platnum Sponsors</h2>
				<hr>
				<div class="row platnum-sponsors">
					<?php $my_query = new WP_Query('cat=323&post_type=sponsors&orderby=menu_order&order=ASC&posts_per_page=999'); ?>
					<?php while ($my_query->have_posts()): $my_query->the_post(); ?>
						<?php
							$sponsor_logo = get_field('sponsor_logo');
							$sponsor_name = get_field('sponsor_name');
							$sponsor_link = get_field('sponsor_link');
						?>
						<?php if (!empty($sponsor_logo)): ?>
							<div class="columns small-6 medium-4">
								<div class="spnsr-container">
									<div class="spnsr-logo">
										<?php if (!empty($sponsor_logo)): ?>
											<a href="http://<?= $sponsor_link ?>"><img src="<?= $sponsor_logo ?>" title="<?= $sponsor_name ?>"></a>
										<?php endif; ?>
									</div>
								</div>
							</div>
						<?php endif; ?>
					<?php endwhile; ?>
				</div>
			</section>

			<section class="sponsor-levels">
				<h2>Gold Sponsors</h2>
				<hr>
				<div class="row gold-sponsors">
					<?php $my_query = new WP_Query('cat=324&post_type=sponsors&orderby=menu_order&order=ASC&posts_per_page=999'); ?>
					<?php while ($my_query->have_posts()): $my_query->the_post(); ?>
						<?php
							$sponsor_logo = get_field('sponsor_logo');
							$sponsor_name = get_field('sponsor_name');
							$sponsor_link = get_field('sponsor_link');
						?>
						<?php if (!empty($sponsor_logo)): ?>
							<div class="columns small-6 medium-4">
								<div class="spnsr-container">
									<div class="spnsr-logo">
										<?php if (!empty($sponsor_logo)): ?>
											<a href="http://<?= $sponsor_link ?>"><img src="<?= $sponsor_logo ?>" title="<?= $sponsor_name ?>"></a>
										<?php endif; ?>
									</div>
								</div>
							</div>
						<?php endif; ?>
					<?php endwhile; ?>
				</div>
			</section>

			<section class="sponsor-levels">
				<h2>Silver Sponsors</h2>
				<hr>
				<div class="row silver-sponsors">
					<?php $my_query = new WP_Query('cat=325&post_type=sponsors&orderby=menu_order&order=ASC&posts_per_page=999'); ?>
					<?php while ($my_query->have_posts()): $my_query->the_post(); ?>
						<?php
							$sponsor_logo = get_field('sponsor_logo');
							$sponsor_name = get_field('sponsor_name');
							$sponsor_link = get_field('sponsor_link');
						?>
						<?php if (!empty($sponsor_logo)): ?>
							<div class="columns small-6 medium-4">
								<div class="spnsr-container">
									<div class="spnsr-logo">
										<?php if (!empty($sponsor_logo)): ?>
											<a href="http://<?= $sponsor_link ?>"><img src="<?= $sponsor_logo ?>" title="<?= $sponsor_name ?>"></a>
										<?php endif; ?>
									</div>
								</div>
							</div>
						<?php endif; ?>
					<?php endwhile; ?>
				</div>
			</section>

			<section class="sponsor-levels">
				<h2>Bronze Sponsors</h2>
				<hr>
				<div class="row bronze-sponsors">
					<?php $my_query = new WP_Query('cat=326&post_type=sponsors&orderby=menu_order&order=ASC&posts_per_page=999'); ?>
					<?php while ($my_query->have_posts()): $my_query->the_post(); ?>
						<?php
							$sponsor_logo = get_field('sponsor_logo');
							$sponsor_name = get_field('sponsor_name');
							$sponsor_link = get_field('sponsor_link');
						?>
						<?php if (!empty($sponsor_logo)): ?>
							<div class="columns small-6 medium-4 text-center">
								<div class="spnsr-container">
									<div class="spnsr-logo">
										<?php if (!empty($sponsor_logo)): ?>
											<a href="http://<?= $sponsor_link ?>"><img src="<?= $sponsor_logo ?>" title="<?= $sponsor_name ?>"></a>
										<?php endif; ?>
									</div>
								</div>
							</div>
						<?php endif; ?>
					<?php endwhile; ?>
				</div>
			</section>

			<section class="sponsor-levels">
				<h2>Agency &amp; Foundation Partners</h2>
				<hr>
				<div class="row agency-foundation-partners">
					<?php $my_query = new WP_Query('cat=327&post_type=sponsors&orderby=menu_order&order=ASC&posts_per_page=999'); ?>
					<?php while ($my_query->have_posts()): $my_query->the_post(); ?>
						<?php
							$sponsor_logo = get_field('sponsor_logo');
							$sponsor_name = get_field('sponsor_name');
							$sponsor_link = get_field('sponsor_link');
						?>
						<?php if (!empty($sponsor_logo)): ?>
							<div class="columns small-6 medium-4">
								<div class="spnsr-container">
									<div class="spnsr-logo">
										<?php if (!empty($sponsor_logo)): ?>
											<a href="http://<?= $sponsor_link ?>"><img src="<?= $sponsor_logo ?>" title="<?= $sponsor_name ?>"></a>
										<?php endif; ?>
									</div>
								</div>
							</div>
						<?php endif; ?>
					<?php endwhile; ?>
				</div>
			</section>

			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
		</article>
	<?php endwhile;?>

	<?php do_action('foundationPress_after_content'); ?>

	</div>
	<?php get_sidebar(about); ?>
</div>
<?php get_footer(); ?>

<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php if ( is_category() ) {
			echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
		} elseif ( is_tag() ) {
			echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
		} elseif ( is_archive() ) {
			wp_title(''); echo ' Archive | '; bloginfo( 'name' );
		} elseif ( is_search() ) {
			echo 'Search for &quot;'.esc_html($s).'&quot; | '; bloginfo( 'name' );
		} elseif ( is_home() || is_front_page() ) {
			bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
		}  elseif ( is_404() ) {
			echo 'Error 404 Not Found | '; bloginfo( 'name' );
		} elseif ( is_single() ) {
			wp_title('');
		} else {
			echo wp_title( ' | ', 'false', 'right' ); bloginfo( 'name' );
		} ?></title>
		
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/app.css" />
		
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-144x144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-114x114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-72x72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-precomposed.png">
		
		<script type="text/javascript" src="//use.typekit.net/ryq4nzi.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		<script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js'></script>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action('foundationPress_after_body'); ?>
	
	<div class="off-canvas-wrap">
	<div class="inner-wrap">
	
	<?php do_action('foundationPress_layout_start'); ?>
	
	<nav class="tab-bar show-for-small-only">
		<section class="left-small">
			<a class="left-off-canvas-toggle menu-icon" ><span></span></a>
		</section>
		<section class="nav-logo right tab-bar-section">
			
			<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php bloginfo('template_url'); ?>/assets/img/ghisallo-logo.svg" alt="The Ghisallo Foundation" title="The Ghisallo Foundation"></a>

		</section>
	</nav>

	<aside class="nav-mobile left-off-canvas-menu">
		<?php foundationPress_mobile_off_canvas(); ?>
	</aside>
	
				<div id="navigation" class="top-bar-container show-for-medium-up">
						<nav class="nav-menu top-bar" data-topbar="">
								<ul class="title-area">
										<li class="logo">
											<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php bloginfo('template_url'); ?>/assets/img/ghisallo-logo.svg" alt="The Ghisallo Foundation" title="The Ghisallo Foundation"></a>
										</li>
								</ul>
								<section class="top-bar-section">
										<?php foundationPress_top_bar_l(); ?>
										<?php foundationPress_top_bar_r(); ?>
								</section>
						</nav>
				</div>



<section class="container" role="document">
	<?php do_action('foundationPress_after_header'); ?>
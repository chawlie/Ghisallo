<?php

if (!function_exists('FoundationPress_scripts')) :
  function FoundationPress_scripts() {

    // deregister the jquery version bundled with wordpress
    wp_deregister_script( 'jquery' );

    // register scripts
    wp_register_script( 'modernizr', get_template_directory_uri() . '/js/modernizr/modernizr.min.js', array(), '1.0.0', false );
    wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery/dist/jquery.min.js', array(), '1.0.0', false );
    wp_register_script( 'foundation', get_template_directory_uri() . '/js/app.js', array('jquery'), '1.0.0', true );
    wp_register_script('slick-js', get_template_directory_uri() . '/js/slick/slick/slick.min.js', array('jquery'), '1.3.7',  TRUE);
    wp_register_script( 'global-js', get_template_directory_uri() . '/js/global.js', array(), '1.0.0', false );

    // enqueue scripts
    wp_enqueue_script('modernizr');
    wp_enqueue_script('jquery');
    wp_enqueue_script('foundation');
    wp_enqueue_script('slick-js');
    wp_enqueue_script('global-js');

  }

  add_action( 'wp_enqueue_scripts', 'FoundationPress_scripts' );
endif;

function kitchensink_scripts() {
  if ( is_page_template('kitchen-sink.php') ) {

    wp_enqueue_script( 'kitchen-sink', get_template_directory_uri() . '/js/kitchen-sink.js', array('jquery'), '1.0.0', true );

  }
}

add_action( 'wp_enqueue_scripts', 'kitchensink_scripts' );

/**
 * Register and enqueue theme styles.
 *
 * @return void
 */
function enqueue_theme_styles() {
  // Register stylesheets
  wp_register_style('global-css', get_template_directory_uri() . '/css/app.css', array(), '1.0.0', 'all');
  wp_register_style('slick-css', get_template_directory_uri() . '/js/slick/slick/slick.css', array(), '1.0.0', 'all');
  wp_register_style('slick-theme-css', get_template_directory_uri() . '/js/slick/slick/slick-theme.css', array(), '1.0.0', 'all');

  // Enqueue global stylesheet
  wp_enqueue_style('global-css');
  wp_enqueue_style('slick-css');
  wp_enqueue_style('slick-theme-css');
}
add_action('wp_enqueue_scripts', 'enqueue_theme_styles');

?>

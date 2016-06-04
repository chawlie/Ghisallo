<?php
/**
 * Title: Assets
 * Description: Register and enqueue all theme stylesheets and scripts.
 * Documentation:
 * -- http://codex.wordpress.org/Function_Reference/wp_deregister_script
 * -- http://codex.wordpress.org/Function_Reference/wp_register_script
 * -- http://codex.wordpress.org/Function_Reference/wp_register_style
 * -- http://codex.wordpress.org/Function_Reference/wp_enqueue_script
 * -- http://codex.wordpress.org/Function_Reference/wp_enqueue_style
 */

/**
 * Register and enqueue theme scripts.
 *
 * @return void
 */
function enqueue_theme_scripts() {

    // Deregister the jQuery version bundled with WordPress
    wp_deregister_script('jquery');

    // Register all our scripts
    wp_register_script('modernizr',         get_template_directory_uri() . '/public/vendor/modernizr.js',                  array(),                                           '2.8.3',  FALSE);
    wp_register_script('fastclick-js',      get_template_directory_uri() . '/public/vendor/fastclick.js',                  array(),                                           '1.0.3',  FALSE);
    wp_register_script('jquery',            get_template_directory_uri() . '/public/vendor/jquery.min.js',                 array(),                                           '2.1.4',  TRUE);
    wp_register_script('foundation-js',     get_template_directory_uri() . '/public/vendor/foundation.min.js',             array('jquery'),                                   '5.5.1',  TRUE);
    wp_register_script('slick-js',          get_template_directory_uri() . '/public/vendor/slick.min.js',                  array('jquery'),                                   '1.3.7',  TRUE);
    wp_register_script('fancybox-js',       get_template_directory_uri() . '/public/vendor/jquery.fancybox.pack.js',       array('jquery'),                                   '2.1.5',  TRUE);
    wp_register_script('scrollto-js',       get_template_directory_uri() . '/public/vendor/jquery.scrollTo.min.js',        array('jquery'),                                   '1.4.13', TRUE);
    wp_register_script('localscroll-js',    get_template_directory_uri() . '/public/vendor/jquery.localScroll.min.js',     array('jquery', 'scrollto-js'),                    '1.3.5',  TRUE);
    wp_register_script('waypoints-js',      get_template_directory_uri() . '/public/vendor/waypoints.min.js',              array('jquery'),                                   '2.0.5',  TRUE);
    wp_register_script('prettify-js',       get_template_directory_uri() . '/public/vendor/prettify.min.js',               array(),                                           '1.0.1',  TRUE);
    wp_register_script('share-js',          get_template_directory_uri() . '/public/js/lib/wlion/wlion.share.js',          array('jquery'),                                   '1.0.0',  TRUE);
    wp_register_script('dynamic-subnav-js', get_template_directory_uri() . '/public/js/lib/wlion/wlion.dynamic-subnav.js', array('jquery', 'localscroll-js', 'waypoints-js'), '1.0.0',  TRUE);
    wp_register_script('sticky-js',         get_template_directory_uri() . '/public/js/lib/wlion/wlion.sticky.js',         array('jquery', 'dynamic-subnav-js'),              '1.0.0',  TRUE);
    wp_register_script('home-js',           get_template_directory_uri() . '/public/js/home.js',                           array(),                                           '1.0.0',  TRUE);
    wp_register_script('styleguide-js',     get_template_directory_uri() . '/public/js/styleguide.js',                     array(),                                           '1.0.0',  TRUE);

    // Base global script dependencies
    $global_js_depends = array(
        'foundation-js',
        'slick-js',
        'fancybox-js',
        'localscroll-js',
        'waypoints-js',
        'share-js'
    );

    // Home page
    if (is_front_page()) {
        array_push($global_js_depends, 'home-js');
    }

    // Style guide page
    if (is_page('styleguide')) {
        array_push($global_js_depends, 'sticky-js', 'dynamic-subnav-js', 'prettify-js', 'styleguide-js');
    }

    // Dynamic sidebar page template
    if (is_page_template('template-dynamic-sidebar-left.php') or is_page_template('template-dynamic-sidebar-right.php')) {
        array_push($global_js_depends, 'sticky-js', 'dynamic-subnav-js');
    }

    // Enqueue global scripts.
    wp_enqueue_script('modernizr');
    wp_enqueue_script('fastclick-js');
    wp_enqueue_script('jquery');
    wp_enqueue_script('global-js', get_template_directory_uri() . '/public/js/global.js', $global_js_depends, '1.0.0',  TRUE);
}
add_action('wp_enqueue_scripts', 'enqueue_theme_scripts');
?>

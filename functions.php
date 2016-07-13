<?php

// init custom posts
require_once 'inc/custom-posts.php';
require_once('inc/customizer.php');
// add ACF Theme Options
if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title' => 'Allgemeine Theme Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        'position' => '63.3',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}

add_action('after_setup_theme', 'hz_theme_setup');

function hz_theme_setup() {
    //remove scrap
    remove_filter('show_admin_bar', 'remove_admin_bar');
    remove_action('init', 'create_post_type_html5');

    // Adding Translation Option
    load_theme_textdomain('heinzTheme', get_stylesheet_directory_uri() . '/languages');

    //new Image Formats
    add_image_size('carousel', 980, 570, array('top', 'center'));
    add_image_size('medium', 314, 200, true);
    add_image_size( 'blog-thumbnail', 314, 9999 );
//    add_image_size('portrait', 560, 680, true);
//    add_image_size('sidebar',365,365,true);
    add_image_size('blog-detail', 750, 465, array('top', 'center'));
    add_image_size('blog-featured', 630, 200, array('top', 'center'));
//    
    //modernizr
    add_action('wp_enqueue_scripts', 'register_modernizr');

    function register_modernizr() {
        wp_deregister_script('modernizr');
        wp_enqueue_script('modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js', '2.8.3', true);
    }

    //init scripts
    add_action('wp_enqueue_scripts', 'hz_scripts');
    if (!function_exists("hz_scripts")) {
        if (!is_admin()) {

            function hz_scripts() {
                wp_register_script('modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', '1.2', true);
                wp_enqueue_script('modernizr');
                // flexslider
                wp_register_script('flexslider', get_stylesheet_directory_uri() . '/flexslider/jquery.flexslider.js', array('jquery'), false, true);
                wp_enqueue_script('flexslider');
                // lightbox
                wp_register_script('nivo-lightbox', get_stylesheet_directory_uri() . '/lightbox/nivo-lightbox.min.js', array('jquery'), false, false);
                wp_enqueue_script('nivo-lightbox');

                wp_register_script('custom-head', get_stylesheet_directory_uri() . '/js/custom-head.js', array('jquery'), false, false);
                wp_enqueue_script('custom-head');

                wp_register_script('custom', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery', 'flexslider'), '1.2', true);
                wp_enqueue_script('custom');
            }

        }
    }

    // init styles
    function hz_styles() {
        wp_register_style('parent-style', get_template_directory_uri() . '/style.css');
        wp_enqueue_style('parent-style'); // Enqueue it!
        //flexslider
        wp_register_style('flexslider', get_stylesheet_directory_uri() . '/flexslider/flexslider.css', array(), false, 'screen');
        wp_enqueue_style('flexslider');
        //lightbox
        wp_register_style('nivo-lightbox', get_stylesheet_directory_uri() . '/lightbox/nivo-lightbox.css', 'style', '1.0', 'all', array());
        wp_enqueue_style('nivo-lightbox');
        wp_register_style('nivo-theme', get_stylesheet_directory_uri() . '/lightbox/themes/default/default.css', 'style', '1.0', 'all', array());
        wp_enqueue_style('nivo-theme');

        wp_register_style('googlefont', 'https://fonts.googleapis.com/css?family=Oswald:400,700|Quattrocento+Sans:400,700,700italic,400italic|Roboto+Condensed:400,300,300italic,700,400italic,700italic', array(), 'all');
        wp_enqueue_style('googlefont'); // Enqueue it!


        wp_register_style('fontawseome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', 'style', array(), '4.4.0', 'all');
        wp_enqueue_style('fontawseome'); // Enqueue it!

        wp_register_style('child-style', get_stylesheet_directory_uri() . '/css/screen.css', array('parent-style', 'flexslider', 'googlefont', 'fontawseome'), '1.0', 'all');
        wp_enqueue_style('child-style'); // Enqueue it!
    }

    add_action('wp_enqueue_scripts', 'hz_styles');


    if (function_exists('register_sidebar')) {
        // place search
        register_sidebar(array(
            'name' => __('Suche', 'heinzTheme'),
            'description' => __('hier liegt das Suchformular...', 'heinzTheme'),
            'id' => 'search',
            'before_widget' => '<div id="search" class="%2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h5>',
            'after_title' => '</h5>'
        ));
        // Define Marquee
        register_sidebar(array(
            'name' => __('Laufschrift', 'heinzTheme'),
            'description' => __('Hier die nächste Veranstaltung als Laufschrift...', 'heinzTheme'),
            'id' => 'marquee',
            'before_widget' => '<div id="marquee" class="%2$s">',
            'after_widget' => '</div>'
        ));
        // Define Sidebar Home
        register_sidebar(array(
            'name' => __('Sidebar Home', 'heinzTheme'),
            'description' => __('Hier die Widgets, die nur auf der Startseite angezeigt werden sollen', 'heinzTheme'),
            'id' => 'sidebar-home',
            'before_widget' => '<div id="%1$s" class="%2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        ));
        // Define Sidebar Events
        register_sidebar(array(
            'name' => __('Sidebar Events', 'heinzTheme'),
            'description' => __('Hier die Widgets, die nur auf HeinLive angezeigt werden sollen', 'heinzTheme'),
            'id' => 'sidebar-events',
            'before_widget' => '<div id="%1$s" class="%2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        ));
        // Define Soundcloud
        register_sidebar(array(
            'name' => __('SoundCloud', 'heinzTheme'),
            'description' => __('Hier das SoundCloud Widget...', 'heinzTheme'),
            'id' => 'sc-widgets',
            'before_widget' => '<div id="%1$s" class="%2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        ));
        // Define Newsletter
        register_sidebar(array(
            'name' => __('Newsletter', 'heinzTheme'),
            'description' => __('Hier das Newsletter Widget...', 'heinzTheme'),
            'id' => 'nl-widget',
            'before_widget' => '<div id="%1$s" class="%2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        ));
        // Define FBWidget
        register_sidebar(array(
            'name' => __('Facebook Widget', 'heinzTheme'),
            'description' => __('Hier das Facebook Widget...', 'heinzTheme'),
            'id' => 'fb-widget',
            'before_widget' => '<div id="%1$s" class="%2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        ));
        // Define Footer Widgets column 01
        register_sidebar(array(
            'name' => __('Footer 01', 'heinzTheme'),
            'description' => __('Hier die Footer Widgets Spalte 01...', 'heinzTheme'),
            'id' => 'footer-widgets-1',
            'before_widget' => '<div id="%1$s" class="%2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        ));
        // Define Footer Widgets column 02
        register_sidebar(array(
            'name' => __('Footer 02', 'heinzTheme'),
            'description' => __('Hier die Footer Widgets Spalte 02...', 'heinzTheme'),
            'id' => 'footer-widgets-2',
            'before_widget' => '<div id="%1$s" class="%2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        ));
    }
    add_theme_support('post-formats', array('video', 'audio', 'gallery'));
    // Add Support for Custom Backgrounds - Uncomment below if you're going to use
    add_theme_support('custom-background', array(
        'default-color' => 'FFF',
        'default-image' => get_template_directory_uri() . '/img/bg.jpg'
    ));

    // Add Support for Custom Header - Uncomment below if you're going to use
    add_theme_support('custom-header', array(
        'default-image' => get_stylesheet_directory_uri() . '/img/headers/default.jpg',
        'header-text' => false,
        'default-text-color' => '000',
        'width' => 1920,
        'height' => 1040,
        'random-default' => true,
        'wp-head-callback' => $wphead_cb,
        'admin-head-callback' => $adminhead_cb,
        'admin-preview-callback' => $adminpreview_cb
    ));
}

add_filter('body_class', 'mv_browser_body_class');

function mv_browser_body_class($classes) {
    global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;
    if ($is_lynx)
        $classes[] = 'lynx';
    elseif ($is_gecko)
        $classes[] = 'gecko';
    elseif ($is_opera)
        $classes[] = 'opera';
    elseif ($is_NS4)
        $classes[] = 'ns4';
    elseif ($is_safari)
        $classes[] = 'safari';
    elseif ($is_chrome)
        $classes[] = 'chrome';
    elseif ($is_IE) {
        $classes[] = 'ie';
        if (preg_match('/MSIE ([0-9]+)([a-zA-Z0-9.]+)/', $_SERVER['HTTP_USER_AGENT'], $browser_version))
            $classes[] = 'ie' . $browser_version[1];
    } else
        $classes[] = 'unknown';
    if ($is_iphone)
        $classes[] = 'iphone';
    if (stristr($_SERVER['HTTP_USER_AGENT'], "mac")) {
        $classes[] = 'osx';
    } elseif (stristr($_SERVER['HTTP_USER_AGENT'], "linux")) {
        $classes[] = 'linux';
    } elseif (stristr($_SERVER['HTTP_USER_AGENT'], "windows")) {
        $classes[] = 'windows';
    }
    return $classes;
}

?>
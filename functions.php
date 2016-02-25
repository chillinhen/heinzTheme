<?php
// init custom posts
require_once 'custom-posts.php';
// add ACF Theme Options
if( function_exists('acf_add_options_page') ) {
	
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

// Adding Translation Option
    load_theme_textdomain('heinzTheme', get_stylesheet_directory_uri() . '/languages');

    //init scripts
    if (!function_exists("my_scripts")) {
        if (!is_admin()) {

            function my_scripts() {
                wp_enqueue_script('modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', '1.2', true);

                wp_enqueue_script('custom', get_stylesheet_directory_uri() . '/includes/js/custom.js', array('jquery'), '1.2', true);
            }

        }
    }
    add_action('wp_enqueue_scripts', 'my_scripts');

    //init styles
    if (!function_exists("my_styles")) {
        if (!is_admin()) {

            function my_styles() {
                wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

                wp_enqueue_style('googleFonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,600,400italic,600italic,700,700italic', 'style', '1.0', 'screen');
                wp_register_style('fontawesome', '//netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', 'style', '4.4.0', 'screen');
                wp_enqueue_style('fontawesome');
                wp_enqueue_style('custom.css', get_stylesheet_directory_uri() . '/includes/css/custom.css', 'style', '1.0', 'screen', array());
            }

        }
    }
    add_action('wp_enqueue_scripts', 'my_styles');

    //Browser Classes
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
    add_filter('body_class', 'mv_browser_body_class');
}

?>
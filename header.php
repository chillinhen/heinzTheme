<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php wp_title(''); ?><?php if (wp_title('', false)) {
    echo ' :';
} ?> <?php bloginfo('name'); ?></title>

        <link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php get_template_part('inc/meta');?>

<?php wp_head(); ?>
        <script>
// conditionizr.com
// configure environment tests
            conditionizr.config({
                assets: '<?php echo get_template_directory_uri(); ?>',
                tests: {}
            });
        </script>

    </head>
    <body <?php body_class(); ?>>
        <?php
                if (is_front_page()): ?>
        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('marquee'))  ?>
               <?php  endif; ?>
        <!-- container -->
       

        <!-- header -->
        <header role="banner">
            <div class="navbar-header">
                <a type="button" class="navbar-toggle" href="#main-nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="navbar-brand" href="#"><?php bloginfo('name'); ?></a>
            </div>
            <?php
            if (is_front_page()):
                get_template_part('partials/flexslider');
            else :
                get_template_part('partials/header', 'image');
            endif;
            ?>
            <!-- logo -->
            <hgroup class="logo">
                <h1>
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
                    </a>
                </h1>
                <h2>
                    <?php
                    if (get_field('logo_headline', 'option')) :
                        the_field('logo_headline', 'option');
                    else :
                        bloginfo('description');
                    endif;
                    ?>
                </h2>
            </hgroup>
            <!-- / logo -->
            <!-- nav -->
            <nav role="navigation" id="main-nav">
                <div class="container collapse navbar-collapse" id="main-menu">
                    <?php html5blank_nav(); ?>
                </div>
            </nav>
            <!-- /nav -->
        </header>
        <!-- /header -->
<main role="main">
    <div class="container">
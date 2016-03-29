<?php /* Template Name: Kaufen */ get_header(); ?>


    <!-- section news -->
    <section class="container top-fold">
            <?php
            // latest Posts
            $args = array(
                'post_type' => 'merchandise',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'DESC'
            );
            $merchandise_query = new WP_Query($args);
            ?>
        <?php if ($merchandise_query->have_posts()) : ?>
        <div class="main">
                <?php while ($merchandise_query->have_posts()) : $merchandise_query->the_post(); ?>
                <?php get_template_part('partials/article', get_post_format());?>
                <?php endwhile;wp_reset_postdata(); ?>
                <?php get_template_part('partials/button');?>
        </div>
        <?php else : ?>
        <div class="main"><?php get_template_part('partials/article', '404'); ?></div>
        <?php endif;?>
        <aside class="side">
        <?php get_sidebar('home'); ?>
        </aside>
    </section>
    <section class="container widgets">
        <div class="main">
<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('sc-widgets'))  ?>
        </div>
        <div class="side">
<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('nl-widget'))  ?>
        </div>
    </section>


    <?php get_footer(); ?>

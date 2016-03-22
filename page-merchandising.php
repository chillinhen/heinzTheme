<?php /* Template Name: Kaufen */ get_header(); ?>


    <!-- section news -->
    <section class="row top-fold">
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
        <div class="col-md-8">
                <?php while ($merchandise_query->have_posts()) : $merchandise_query->the_post(); ?>
                <?php get_template_part('partials/article', get_post_format());?>
                <?php endwhile;wp_reset_postdata(); ?>
                <?php get_template_part('partials/button');?>
        </div>
        <?php else : ?>
        <div class="col-md-8"><?php get_template_part('partials/article', '404'); ?></div>
        <?php endif;?>
        <aside class="col-md-4">
        <?php get_sidebar('home'); ?>
        </aside>
    </section>
    <section class="row widgets">
        <div class="col-md-8">
<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('sc-widgets'))  ?>
        </div>
        <div class="col-md-4">
<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('nl-widget'))  ?>
        </div>
    </section>


    <?php get_footer(); ?>

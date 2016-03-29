<?php /* Template Name: Home Page */ get_header(); ?>


    <!-- section news -->
    <section class="container top-fold">
            <?php
            // latest Posts
            $args = array(
                'post_status' => 'publish',
                'posts_per_page' => 2,
                'orderby' => 'date',
                'order' => 'DESC'
            );
            $latest_query = new WP_Query($args);
            ?>
        <?php if ($latest_query->have_posts()) : ?>
        <div class="main latest">
                <?php while ($latest_query->have_posts()) : $latest_query->the_post(); ?>
                <?php get_template_part('partials/article', get_post_format());?>
                <?php endwhile;?>
                <?php #get_template_part('partials/button');?>
        </div>
        <?php else : ?>
        <div class="main"><?php get_template_part('partials/article', '404'); ?></div>
        <?php endif;wp_reset_postdata(); ?>
        <aside class="side">
        <?php get_template_part('partials/kaufen'); ?>
        </aside>
    </section>
    <?php get_template_part('partials/button');?>
    <!-- section -->
    <section class="container featured"> 
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                <div class="main">
                    <?php get_template_part('partials/article', 'featured'); ?>
                </div>
                <aside class="side">
                    <?php get_sidebar('home'); ?>
                </aside>
                <?php
            endwhile;
        else:
            ?>
            <div class="col-md-12">
            <?php get_template_part('partials/article', '404'); ?>
            </div>
<?php endif; ?>

    </section>
    <!-- /section -->
    <!-- section -->
    <section class="container widgets">
        <div class="main">
<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('sc-widgets'))  ?>
        </div>
        <div class="side">
<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('nl-widget'))  ?>
        </div>
    </section>


    <?php get_footer(); ?>

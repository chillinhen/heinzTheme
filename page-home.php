<?php /* Template Name: Home Page */ get_header(); ?>


    <!-- section news -->
    <section class="row top-fold">
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
        <div class="col-md-8">
            <div class="row">
                <?php while ($latest_query->have_posts()) : $latest_query->the_post(); ?>
                <div class="col-sm-6"><?php get_template_part('partials/article', get_post_format());?></div>
                <?php endwhile;?>
                <?php #get_template_part('partials/button');?>
            </div>
        </div>
        <?php else : ?>
        <div class="col-md-8"><?php get_template_part('partials/article', '404'); ?></div>
        <?php endif;wp_reset_postdata(); ?>
        <aside class="col-md-4">
        <?php get_template_part('partials/kaufen'); ?>
        </aside>
    </section>
    <?php get_template_part('partials/button');?>
    <!-- section -->
    <section class="row featured"> 
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                <div class="col-md-8">
                    <?php get_template_part('partials/article', 'featured'); ?>
                </div>
                <aside class="col-md-4">
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
    <section class="row widgets">
        <div class="col-md-8">
<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('sc-widgets'))  ?>
        </div>
        <div class="col-md-4">
<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('nl-widget'))  ?>
        </div>
    </section>


    <?php get_footer(); ?>

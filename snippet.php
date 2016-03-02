
<?php if (is_front_page()): ?>

    <div id="content" class="main-content-inner col-sm-12 col-md-8">
        <?php
        // latest Posts
        $args = array(
            'post_status' => 'publish',
            'posts_per_page' => 2,
            'orderby' => 'date',
            'order' => 'DESC'
        );
        $latest_query = new WP_Query($args);

// The Loop
        if ($latest_query->have_posts()) : while ($latest_query->have_posts()) : $latest_query->the_post();
                get_template_part('partials/article', get_post_format());
            endwhile;
        else :
        // no posts found
        endif;
        /* Restore original Post Data */
        wp_reset_postdata();
        ?>
    </div>
    <div class="sidebar col-sm-12 col-md-4">
        <em>hier der kaufartikel</em>
    </div>
    </div><!-- /.row --- end first row -->
    <!-- Featured Post und Evenst -->
     <?php while (have_posts()) : the_post(); ?>
    <div class="row">
        <div class="col-sm-12 col-md-8">
            <?php get_template_part('partials/article', 'featured');?>
        </div>
        
        <div class="sidebar col-sm-12 col-md-4">Events</div>
    </div>
    <?php endwhile; // end of the loop. ?>
    <?php else :
    ?><!-- default page -->
    <div id="content" class="main-content-inner col-sm-12 col-md-8">

        <?php while (have_posts()) : the_post(); ?>

            <?php get_template_part('content', 'page'); ?>

            <?php
            // If comments are open or we have at least one comment, load up the comment template
            if (comments_open() || '0' != get_comments_number())
                comments_template();
            ?>

        <?php endwhile; // end of the loop. ?>

        <?php get_sidebar(); ?>

    <?php endif; ?>


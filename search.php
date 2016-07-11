<?php get_header(); ?>
<!-- section -->
<section class="container">
    <p>
        <em><?php echo sprintf(__('%s Search Results for ', 'heinzTheme'), $wp_query->found_posts); ?>
            <strong><?php echo get_search_query(); ?></strong>
        </em>
    </p>
    <?php if (have_posts()): ?>
        <div class="main">
            <?php while (have_posts()) : the_post(); ?>

                <!-- article -->
                <?php get_template_part('partials/article', 'list'); ?>
                <!-- /article -->
            <?php endwhile; ?>
                <?php get_template_part('pagination'); ?>
        </div>

    <?php else: ?>

        <!-- 404 -->
        <div class="main">
            <?php get_template_part('partials/article', '404'); ?>
        </div>
        <!-- /404 -->
    <?php endif; ?>


    <?php get_sidebar(); ?>
</section>
<!-- /section -->

<?php get_footer(); ?>

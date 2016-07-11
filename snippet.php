<?php get_header(); ?>
<section class="container">
    <main role="main">
        <!-- section -->

        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                <?php get_template_part('partials/article', 'list'); ?>
            <?php endwhile; ?>

        <?php else: ?>

            <!-- article -->
            <article>
                <h2><?php _e('Sorry, nothing to display.', 'heinzTheme'); ?></h2>
            </article>
            <!-- /article -->

        <?php endif; ?>

        <?php get_template_part('pagination'); ?>

        <!-- /section -->
    </main>
    <?php get_sidebar(); ?>
</section>


<?php get_footer(); ?>

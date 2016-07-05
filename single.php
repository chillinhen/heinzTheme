<?php get_header(); ?>
<?php if (have_posts()): ?>
    <section class="container">
        <div class="main">
            <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('partials/article', 'full'); ?>
            <?php endwhile; ?>
        </div>
        <?php get_sidebar(); ?>
    </section>
        <?php get_template_part('partials/article', 'related'); ?>
<?php else: ?>
    <section class="container">
        <!-- 404 -->
        <div class="main">
            <?php get_template_part('partials/article', '404'); ?>
        </div>
        <!-- /404 -->
    </section>
<?php endif; ?>
<?php get_footer(); ?>
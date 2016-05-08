
    <?php if (have_posts()): ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="main">
                <!-- article -->
                <?php get_template_part('partials/article', 'full'); ?>
                <!-- /article -->
            </div>
        <?php endwhile; ?>
        <div class="side"><?php get_sidebar(); ?></div>

    <?php else: ?>

        <!-- 404 -->
        <div class="main">
            <?php get_template_part('partials/article', '404'); ?>
        </div>
        <!-- /404 -->
    </div>
<?php endif; ?>

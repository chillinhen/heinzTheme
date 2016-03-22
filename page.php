<?php get_header(); ?>
<!-- section -->
<section class="row">

    <?php if (have_posts()): ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="col-md-8">
                <!-- article -->
                <?php get_template_part('partials/article', 'full'); ?>
                <!-- /article -->



            </div>
        <?php endwhile; ?>
        <div class="col-md-4"><?php get_sidebar(); ?></div>

    <?php else: ?>

        <!-- 404 -->
        <div class="col-md-8">
            <?php get_template_part('partials/article', '404'); ?>
        </div>
        <!-- /404 -->
    </div>
<?php endif; ?>

</section>
<!-- /section -->

<?php get_footer(); ?>

<?php get_header(); ?>
<section class="blog">
    <?php if (have_posts()): ?>	
        <div class="blogposts">
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('partials/article', get_post_format()); ?>
            <?php endwhile ?>
            
        </div>
    <?php endif; ?>
    <?php get_template_part('pagination'); ?>
</section>
<?php get_sidebar(); ?>
<!-- /section -->
<?php get_footer(); ?>

<?php get_header(); ?>
<?php
// latest Posts
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'tag_not_in' => array(28),
    #'posts_per_page' => 10,
    'orderby' => 'date',
    'order' => 'DESC'
);
$blogQuery = new WP_Query($args);
?>
<section class="blog">
    <?php if ($blogQuery->have_posts()): ?>	
        <div class="blogposts">
            <?php while ($blogQuery->have_posts()) : $blogQuery->the_post(); ?>
                <?php get_template_part('partials/article', get_post_format()); ?>
            <?php endwhile;                wp_reset_query(); ?>
            
        </div>
    <?php endif; ?>
    <?php get_template_part('pagination'); ?>
</section>
<?php get_sidebar(); ?>



<!-- /section -->
<?php get_footer(); ?>

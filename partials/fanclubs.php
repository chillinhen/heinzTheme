<?php
// latest Posts
$args = array(
    'post_type' => 'fans',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC'
);
$fans_query = new WP_Query($args);
?>
<?php if ($fans_query->have_posts()) : ?>
    <div class="main">
        <?php while ($fans_query->have_posts()) : $fans_query->the_post(); ?>
            <?php get_template_part('partials/article', get_post_format()); ?>
        <?php endwhile;
        wp_reset_postdata(); ?>
    </div>
<?php else : ?>
    <div class="main"><?php get_template_part('partials/article', '404'); ?></div>
<?php endif; ?>
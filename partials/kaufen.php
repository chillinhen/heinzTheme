<?php
$argsMerchandise = array(
    'post_type' => 'merchandise',
    'post_status' => 'publish',
    'posts_per_page' => 1,
    'orderby' => 'date',
    'order' => 'DESC');

$queryMerchandise = new WP_Query($argsMerchandise);
?>
<?php if ($queryMerchandise->have_posts()) : while ($queryMerchandise->have_posts()) : $queryMerchandise->the_post(); ?>
<?php get_template_part('partials/article');?>
<?php endwhile; endif; wp_reset_postdata();?>
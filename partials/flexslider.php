<?php
$argsCarousel = array(
    'post_type' => 'carousel',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC');

$bannerCarousel = new WP_Query($argsCarousel);
?>
<?php if ($bannerCarousel->have_posts()) : ?>
    <div class="flexslider">
        <ul class="slides">
            <?php while ($bannerCarousel->have_posts()) : $bannerCarousel->the_post(); ?>
                <?php get_template_part('partials/carousel', 'item'); ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </ul>
    </div>
<?php endif; ?>

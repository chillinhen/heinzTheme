<?php
// latest Posts
$args = array(
    'post_type' => array('fans','venn-artikel'),
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'random'
);
$fans_query = new WP_Query($args);
?>
<?php if ($fans_query->have_posts()) : ?>
    <div class="fanclubs flexslider">
        <h2 style="text-align: center;"><?php _e('Venn-Clubs und Venn-Artikel')?></h2>
        <ul class="slides">
        <?php while ($fans_query->have_posts()) : $fans_query->the_post(); ?>
            <li><?php get_template_part('partials/article', get_post_format()); ?></li>
        <?php endwhile;
        wp_reset_postdata(); ?>
        </ul>
    </div>
   <?php get_template_part('partials/button','venns');?>
<?php else : ?>
    <div class="main"><?php get_template_part('partials/article', '404'); ?></div>
<?php endif; ?>
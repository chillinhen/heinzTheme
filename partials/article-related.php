<?php
// get only first 3 results
$ids = get_field('related_posts', false, false);

$relatedQuery = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'post__in' => $ids,
    'post_status' => 'publish',
    'orderby' => 'post__in',
        ));
?>
<?php if ($relatedQuery->have_posts()) : ?>
    
    <section class="container related">
        <h2><?php _e('Ähnlicher Kram', 'heinzTheme'); ?></h2>
        <?php
        while ($relatedQuery->have_posts()) : $relatedQuery->the_post();
            if (has_post_format('video')) :
                get_template_part('partials/article', 'video');
            else :
                get_template_part('partials/article',get_post_format());
            endif;
        endwhile;
        wp_reset_postdata();
        ?>
    </section>
<?php endif; ?>
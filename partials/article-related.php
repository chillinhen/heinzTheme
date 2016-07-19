<?php
// get only first 3 results
$ids = get_field('related_posts', false, false);

$relatedQuery = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'post__in' => $ids,
    'post_status' => 'any',
    'orderby' => 'post__in',
        ));
?>
<?php if ($relatedQuery->have_posts()) : ?>
<h2><?php _e('Ähnlicher Kram','heinzTheme');?></h2>
    <section class="container related">
    <?php
    while ($relatedQuery->have_posts()) : $relatedQuery->the_post();
        get_template_part('partials/card',get_post_format());
    endwhile;
    wp_reset_postdata();
    ?>
    </section>
<?php endif; ?>
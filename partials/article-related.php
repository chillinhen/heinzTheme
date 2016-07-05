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
    <section class="container related">
    <?php
    while ($relatedQuery->have_posts()) : $relatedQuery->the_post();
        get_template_part('partials/card');
        #echo '<h1>...</h1>';
    endwhile;
    wp_reset_postdata();
    ?>
    </section>
<?php endif; ?>
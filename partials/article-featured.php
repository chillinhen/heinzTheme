<?php
$featuredPost = get_field('featured-post');

if ($featuredPost) :
    $post = $featuredPost;
    setup_postdata($post);
    get_template_part('partials/article', get_post_format());
endif;
wp_reset_postdata();
?>
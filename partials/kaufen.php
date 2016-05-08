<?php
$argsMerchandise = array(
    'post_type' => 'merchandise',
    'post_status' => 'publish',
    'posts_per_page' => 1,
    'orderby' => 'date',
    'order' => 'DESC');

$queryMerchandise = new WP_Query($argsMerchandise);
?>
<?php
if ($queryMerchandise->have_posts()) : while ($queryMerchandise->have_posts()) : $queryMerchandise->the_post();
        $thumb_id = get_post_thumbnail_id();
        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large', true);
        $thumb_url = $thumb_url_array[0];
        ?>
        <article style="background-image: url('<?php echo $thumb_url; ?>');" id="post-<?php the_ID(); ?>" <?php post_class('kaufen'); ?>>
            
            <h3>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                <?php the_excerpt(); ?>
            <footer class="post-infos">
        <?php edit_post_link(); ?>
            </footer>
        </article>
        <?php get_template_part('partials/button');?>


    <?php
    endwhile;
endif;
wp_reset_postdata();
?>
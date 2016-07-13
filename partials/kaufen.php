<?php

$post_object = get_field('kaufen-post');
$post_link = get_field('kaufen-link');

if( $post_object ): 

	// override $post
	$post = $post_object;
	setup_postdata( $post ); 

	?>
<!-- article -->
<article id="post-<?php the_ID(); ?>" <?php post_class('kaufen'); ?>>
    <!-- post thumbnail -->
    <?php if (has_post_thumbnail()) : // Check if thumbnail exists ?>
        <a class="thumbnail" href="<?php echo $post_link; ?>" title="<?php the_title(); ?>" target="_blank">
            <?php the_post_thumbnail('medium'); // Declare pixel size you need inside the array ?>
        </a>
    <?php endif; ?>
    <!-- /post thumbnail -->
    <h3><a href="<?php echo $post_link; ?>" title="<?php the_title(); ?>" target="_blank"><?php the_title(); ?></a></h3>
    
    <?php get_template_part('partials/article','small-footer'); ?>
</article>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
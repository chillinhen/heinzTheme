<?php $image = get_field('weiteres-bild');

if( !empty($image) ): 

	// vars
	$url = $image['url'];
	$title = $image['title'];

	// thumbnail
	$size = 'medium';
	$thumb = $image['sizes'][ $size ];
	$width = $image['sizes'][ $size . '-width' ];
	$height = $image['sizes'][ $size . '-height' ];?>

<?php endif; ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <!-- post thumbnail -->
    <?php if (has_post_thumbnail()) : // Check if thumbnail exists ?>
        <a class="thumbnail" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" style="background-image: url('<?php echo $image['url'];?>');?> ;">
            <?php the_post_thumbnail('medium'); // Declare pixel size you need inside the array ?>
        </a>
    <?php endif; ?>
    <!-- /post thumbnail -->
    <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
    <?php html5wp_excerpt('html5wp_index'); ?>
    
</article>
<!-- /article -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php 

$image = get_field('weiteres-bild');

if( !empty($image) ): 

	// vars
	$url = $image['url'];
	$title = $image['title'];
	$alt = $image['alt'];
	$caption = $image['caption'];

	// thumbnail
	$size = 'blog-detail';
	$thumb = $image['sizes'][ $size ];
	$width = $image['sizes'][ $size . '-width' ];
	$height = $image['sizes'][ $size . '-height' ];?>

	<a class="showLightbox" href="<?php echo $url = $image['url'];?>" title="<?php echo $url = $image['title'];?>">
	<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
	</a>

<?php endif; ?>
    <!-- post title -->
    <h2>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
    </h2>
    <!-- /post title -->
    <?php the_content();?>
    <footer>
        <div class="meta">
            <span class="edit"><?php edit_post_link(); ?></span>
        </div>
    </footer>

</article>
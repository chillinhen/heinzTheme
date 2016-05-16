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
	$sizeLarge = 'blog-detail';
	$thumbLarge = $image['sizes'][ $sizeLarge];
	
	$sizeMedium = 'medium';
	$thumbMedium = $image['sizes'][ $sizeMedium];
	
	$sizeSmall = 'small';
	$thumbSmall = $image['sizes'][ $sizeSmall];
	
	?>

	<a class="showLightbox" href="<?php echo $url = $image['url'];?>" title="<?php echo $url = $image['title'];?>">
	<img src="<?php echo $thumbLarge; ?>" alt="<?php echo $alt; ?>" srcset="<?php echo $thumbSmall; ?> 320w, <?php echo $thumbMedium; ?> 600w, <?php echo $thumbLarge; ?> 900w"/>
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
<!--
srcset="small.jpg 320w, medium.jpg 600w, large.jpg 900w"

-->
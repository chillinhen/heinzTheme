<!-- article -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a class="video-thumbnail" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
	<img src="http://img.youtube.com/vi/<?php echo get_field('video_id');?>/0.jpg" alt="<?php the_title(); ?>" width="350" height="200">
	</a>
	  <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
	  
    
    <?php get_template_part('partials/article','small-footer'); ?>
</article>
<!-- /article -->
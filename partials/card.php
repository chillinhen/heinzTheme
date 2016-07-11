<!-- article -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <!-- post thumbnail -->
    <?php if ($format == 'video') : ?>
        <a class="video-thumbnail" href="<?php the_permalink(); ?>#main-menu" title="<?php the_title(); ?>">
            <img src="http://img.youtube.com/vi/<?php echo get_field('video_id'); ?>/0.jpg" alt="<?php the_title(); ?>" width="314" height="200">
        </a>
    <?php else : ?>
      
        <?php if (has_post_thumbnail()) : // Check if thumbnail exists ?>
            <a class="thumbnail" href="<?php the_permalink(); ?>#main-menu" title="<?php the_title(); ?>">
                <?php the_post_thumbnail('blog-detail'); // Declare pixel size you need inside the array ?>
            </a>
        <?php endif; ?>
    <?php endif; ?>
    <!-- /post thumbnail -->
    <h3><a href="<?php the_permalink(); ?>#main-menu" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
    <?php the_excerpt(); ?>
    
    <?php get_template_part('partials/article','small-footer'); ?>
</article>
<!-- /article -->
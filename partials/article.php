<!-- article -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <!-- post thumbnail -->
    <?php if (has_post_thumbnail()) : // Check if thumbnail exists ?>
        <a class="thumbnail" href="<?php the_permalink(); ?>#main-menu" title="<?php the_title(); ?>">
            <?php the_post_thumbnail('medium'); // Declare pixel size you need inside the array ?>
        </a>
    <?php endif; ?>
    <!-- /post thumbnail -->
    <h3><a href="<?php the_permalink(); ?>#main-menu" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
    <?php the_content(); ?>
    
    <?php get_template_part('partials/article','small-footer'); ?>
</article>
<!-- /article -->
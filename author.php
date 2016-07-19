<?php get_header(); ?>

            <div class="main">
    <?php if (have_posts()): the_post();?>
        <?php  ?>

            <h1><?php _e('Author Archives for ', 'html5blank');
    echo get_the_author(); ?></h1>

            <?php if (get_the_author_meta('description')) : ?>

        <?php echo get_avatar(get_the_author_meta('user_email')); ?>

                <h2><?php _e('About ', 'html5blank');
        echo get_the_author(); ?></h2>

                <?php echo wpautop(get_the_author_meta('description')); ?>

            <?php endif; ?>

    <?php rewind_posts();
    while (have_posts()) : the_post(); ?>

                <!-- article -->
                <article id="post-<?php the_ID(); ?>" <?php post_class('list'); ?>>

                    <!-- post thumbnail -->
                    <?php if (has_post_thumbnail()) : // Check if Thumbnail exists  ?>
                        <a class="thumbnail" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php the_post_thumbnail(array(120, 120)); // Declare pixel size you need inside the array  ?>
                        </a>
        <?php endif; ?>
                    <!-- /post thumbnail -->

                    <!-- post title -->
                    <h3><a href="<?php the_permalink(); ?>#main-menu" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                    <?php the_excerpt(); ?>
                    <!-- /Post title -->

        <?php get_template_part('partials/article', 'small-footer'); ?>

        <?php edit_post_link(); ?>

                </article>
                <!-- /article -->
            
    <?php endwhile; ?>
    
<?php else: ?>

        <?php get_template_part('partials/article', '404'); ?>
       
<?php endif; ?>
 </div>
<?php get_sidebar(); ?>
    
    <?php get_template_part('pagination'); ?>



<?php get_footer(); ?>

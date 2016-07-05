<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <!-- post thumbnail -->
    <?php if (has_post_thumbnail()) : // Check if Thumbnail exists ?>
        <a href="<?php the_permalink(); ?>#main-menu" title="<?php the_title(); ?>">
            <?php the_post_thumbnail(); // Fullsize image for the single post ?>
        </a>
    <?php endif; ?>
    <!-- /post thumbnail -->

    <!-- post title -->
    <h1>
        <a href="<?php the_permalink(); ?>#main-menu" title="<?php the_title(); ?>"><?php the_title(); ?></a>
    </h1>
    <!-- /post title -->
    <?php the_content();?>
    <?php get_template_part('partials/article','footer');?>

    <?php comments_template(); ?>

</article>
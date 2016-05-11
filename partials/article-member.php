<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php $addImage = get_field('weiteres-bild');?>
    <img src="<?php echo $addImage;?>"/>
    <!-- post title -->
    <h1>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
    </h1>
    <!-- /post title -->
    <?php the_content();?>
    <?php get_template_part('partials/article','footer');?>

    <?php comments_template(); ?>

</article>
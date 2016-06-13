<?php get_header(); ?>
<!-- section -->
<section class="row">
	<h1><?php
	    _e('', 'heinzTheme');
	    single_cat_title();
	    ?>
	    </h1>
    <div class="blogposts">
        <?php
        if (have_posts()): while (have_posts()) : the_post();
                get_template_part('partials/article', get_post_format());
            endwhile;
        endif;
        ?>
    </div>
    <!-- /section -->
   <?php get_template_part('pagination');?>

    <?php get_footer(); ?>

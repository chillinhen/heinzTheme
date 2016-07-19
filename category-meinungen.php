<?php get_header(); ?>
<!-- section -->
<section class="row">
    <?php if (have_posts()):?>
	<h1><?php
	    _e('', 'heinzTheme');
	    single_cat_title();
	    ?>
	    </h1>
    <div class="main">
        <?php while (have_posts()) : the_post();
                get_template_part('partials/article', get_post_format());
            endwhile;?>
        
    </div>
     <?php get_template_part('pagination');?>
    <?php else :?>
    <div class="main">
            <?php get_template_part('partials/article', '404'); ?>
    </div>
    <!-- /section -->
  
    <?php endif;?>
        
</section>

    <?php get_footer(); ?>

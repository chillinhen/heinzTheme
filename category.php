<?php get_header(); ?>
<!-- section -->
<section class="row">

    <div class="main">

        <h1><?php
            _e('', 'heinzTheme');
            single_cat_title();
            ?></h1>
        <?php
        if (have_posts()): while (have_posts()) : the_post();
                get_template_part('partials/article', get_post_format());
            endwhile;
            get_template_part('pagination');
        else:
            get_template_part('partials/article', '404');
        endif;
        ?>




    </div>
    <!-- /section -->

    <?php get_footer(); ?>

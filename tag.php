<?php get_header(); ?>
<!-- section -->
<section class="container">
    <?php if (have_posts()): ?>
        
            <h1>
                <?php single_tag_title();?>
            </h1>
            <p>
                <em>
                    <?php echo category_description(); ?>
                </em>
            </p>
       <div class="blogposts">
            <?php
            while (have_posts()) : the_post();
                get_template_part('partials/article',  get_post_format());
            endwhile;
            ?>
        </div>
        <?php
        get_template_part('pagination');
    else:
        ?>
        <div class="main">
        <?php get_template_part('partials/article', '404'); ?>
        </div>
<?php endif; ?>
</section>


<!-- /section -->

<?php get_footer(); ?>

<?php get_header(); ?>
<!-- section -->
<section class="wrapper">

    <?php if (have_posts()): ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="main">
                <!-- article -->    
                <?php get_template_part('partials/article', 'member'); ?>
                <!-- /article -->
            </div>
        <?php endwhile; ?>
        <aside>
            <?php
            $posts = get_field('andere_mitglieder');

            if ($posts):
                ?>
                <ul>
                    <?php foreach ($posts as $post): // variable must be called $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>
                        <li>
                            <?php get_template_part('partials/card','member');?>

                        </li>
                    <?php endforeach; ?>
                </ul>
                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php endif; ?>
        </aside>

    <?php else: ?>

        <!-- 404 -->
        <div class="main">
            <?php get_template_part('partials/article', '404'); ?>
        </div>
        <!-- /404 -->
    </div>
<?php endif; ?>

</section>
<!-- /section -->

<?php get_footer(); ?>

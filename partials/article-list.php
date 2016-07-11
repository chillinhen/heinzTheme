<!-- article -->
<article id="post-<?php the_ID(); ?>" <?php post_class('list'); ?>>
    <!-- post thumbnail -->
        <?php if (has_post_thumbnail()) : // Check if thumbnail exists ?>
            <a  href="<?php the_permalink(); ?>#main-menu" title="<?php the_title(); ?>">
                <?php the_post_thumbnail('small'); // Declare pixel size you need inside the array ?>
            </a>
        <?php endif; ?>
    <!-- /post thumbnail -->
    <h3><a href="<?php the_permalink(); ?>#main-menu" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
    <?php the_excerpt(); ?>

    <footer>
        <div class="meta">
            <span class="date"><?php the_time('F j, Y'); ?></span>
            <span class="category">
                <?php
                _e('<span>Categories:</span> ', 'heinzTheme');
                the_category(', '); // Separated by commas  
                ?>
            </span>
            <?php if (has_tag()) : ?>
                <span class="tags"><?php the_tags(__('<span>Tags: </span>', 'heinzTheme'), ', ', '<br>'); // Separated by commas with a line break at the end       ?></span>
            <?php endif;
            ?>

            <span class="author"><?php _e('<span>Published by</span>', 'heinzTheme'); ?> <?php the_author_posts_link(); ?></span>
            <span class="edit"><?php edit_post_link(); ?></span>   
            <!-- /post details -->
        </div>

    </footer>
</section>
</article>
<!-- /article -->
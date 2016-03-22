<!-- article -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <!-- post thumbnail -->
    <?php if (has_post_thumbnail()) : // Check if thumbnail exists ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php the_post_thumbnail(array(120, 120)); // Declare pixel size you need inside the array ?>
        </a>
    <?php endif; ?>
    <!-- /post thumbnail -->
    <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
    <?php the_excerpt(); ?>
    <footer class="post-infos">
    <span class="date"><?php the_time('D. d.m.Y'); ?></span>
    <span class="comments"><?php if (comments_open(get_the_ID())) comments_popup_link(__('Leave your thoughts', 'html5blank'), __('1 Comment', 'html5blank'), __('% Comments', 'html5blank')); ?></span>
    <?php edit_post_link(); ?>
    </footer>
</article>
<!-- /article -->
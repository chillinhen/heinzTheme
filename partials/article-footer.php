<!-- post details -->
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
            <span class="tags"><?php the_tags(__('<span>Tags: </span>', 'heinzTheme'), ', ', '<br>'); // Separated by commas with a line break at the end      ?></span>
        <?php endif;
        ?>
        
        <span class="author"><?php _e('<span>Published by</span>', 'heinzTheme'); ?> <?php the_author_posts_link(); ?></span>
        <span class="meta-comments"><?php if (comments_open(get_the_ID())) comments_popup_link(__('Leave your thoughts', 'heinzTheme'), __('1 Comment', 'heinzTheme'), __('% Comments', 'heinzTheme')); ?></span>
        <span class="edit"><?php edit_post_link(); ?></span>   
        <!-- /post details -->
    </div>
    
</footer>
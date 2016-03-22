<!-- item -->
<div class="item">
     <div class="container">
    <!-- post thumbnail -->
    <?php if (has_post_thumbnail()) : // Check if thumbnail exists ?>
        <?php the_post_thumbnail('carousel'); // Declare pixel size you need inside the array ?>
    <?php endif; ?>
    <!-- /post thumbnail -->
   
        <div class="carousel-caption">
            <h1>
                <?php the_title(); ?></h1>
            <hr>
            <?php the_content(); ?>

            <?php if (current_user_can('edit_posts')) : ?>
                <div class="infos">
                    <?php edit_post_link(); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>



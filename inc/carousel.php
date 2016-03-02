<?php
$argsCarousel = array(
    'post_type' => 'carousel',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC');

$bannerCarousel = new WP_Query($argsCarousel);
?>
<?php if ($bannerCarousel->have_posts()) : ?>
    <div id="carousel-banner" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php $counter = 0; ?>
            <?php while ($bannerCarousel->have_posts()) : $bannerCarousel->the_post(); ?>

                <li data-target="#carousel-banner" data-slide-to="<?php echo $counter; ?>"><?php echo $counter + 1; ?> </li>
                <?php $counter++; ?>		    
            <?php endwhile; ?>
        </ol>
         <!-- Wrapper for slides -->
         <div class="carousel-inner" role="listbox">
             <?php while ($bannerCarousel->have_posts()) : $bannerCarousel->the_post(); ?>
		    <?php get_template_part('inc/carousel', 'item'); ?>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
         </div>
         <!-- Controls -->
    	<a class="left carousel-control" href="#carousel-banner" data-slide="prev">
    	    <i class="fa fa-angle-left fa-2"></i><span><?php _e('Prevs','heinzTheme' )?></span>
    	</a>
    	<a class="right carousel-control" href="#carousel-banner" data-slide="next">
            <i class="fa fa-angle-right fa-2"></i><span><?php _e('Next','heinzTheme' )?></span>
    	</a>
    </div>
<?php endif; ?>

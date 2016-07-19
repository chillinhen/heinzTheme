<?php /* Template Name: Termine */ get_header(); ?>

	<section class="container">
	
	    <?php if (have_posts()): ?>
	        <?php while (have_posts()) : the_post(); ?>
	            <div class="main">
	                <!-- article -->
	                <?php get_template_part('partials/article', 'full'); ?>
	                <!-- /article -->
	
	
	
	            </div>
	        <?php endwhile; ?>
	       <?php get_sidebar('events'); ?>
	
	    <?php else: ?>
	
	        <!-- 404 -->
	        <div class="main">
	            <?php get_template_part('partials/article', '404'); ?>
	        </div>
	        <!-- /404 -->
	    </div>
	<?php endif; ?>
	
	</section>
    <section class="container widgets">
        <div class="main">
<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('sc-widgets'))  ?>
        </div>
        <div class="side" role="complementary">
<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('nl-widget'))  ?>
        </div>
    </section>


    <?php get_footer(); ?>

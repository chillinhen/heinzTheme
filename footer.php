        <?php
                if (is_front_page()): ?>		
<section class="widgets">
			<div class="main">
			    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('fb-widget'))  ?>
			</div>
			<?php
			$kontaktHeadline = get_field('kontakt_headline', 'option');
			$kontakt = get_field('kontaktdaten', 'option');
			if ($kontakt) :
			    ?>
			    <div class="side">
				    <?php if ($kontaktHeadline) : ?>
				        <h3><?php echo $kontaktHeadline; ?></h3>
				    <?php endif; ?>
				    <?php echo $kontakt; ?>
				</div>
			<?php endif;?>
		</section>
<?php endif;?>
</div>
	</main>	
<!-- footer -->
<footer class="footer" role="contentinfo">
	<div class="container">
	    <?php get_sidebar('footer'); ?>
	</div>
	<div class="container">
	    <!-- copyright -->
	    <p class="copyright">
	        &copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'heinzTheme'); ?>
	        <a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
	    </p>
	    <!-- /copyright -->
	</div>
</footer>
<?php wp_footer(); ?>

<!-- analytics -->
<?php $analytics = get_field('analytics', 'option');
if ($analytics):
    ?>
    <script>
    <?php echo strip_tags($analytics); ?>
    </script>
<?php endif; ?>
<!-- analytics --> 

</body>
</html>
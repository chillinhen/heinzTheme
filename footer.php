<section class="row widgets">
    
    <?php
    $kontaktHeadline = get_field('kontakt_headline', 'option');
    $kontakt = get_field('kontaktdaten', 'option');
    if ($kontakt) :
        ?>
        <div class="col-md-8">
            <?php if($kontaktHeadline) : ?>
            <h3><?php echo $kontaktHeadline; ?></h3>
            <?php endif;?>
            <?php echo $kontakt; ?>
        </div>

    <?php endif;?>
    
    <div class="col-md-4">
        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('fb-widget'))  ?>
    </div>
</section>
</main>	
</div>
<!-- footer -->
<footer class="footer" role="contentinfo">
    <div class="container">
        <div class="row">
            <?php get_sidebar('footer'); ?>

        </div>
        <div class="row">
            <!-- copyright -->
            <div class="copyright col-md-12 text-center">
                &copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
                <a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
            </div>
            <!-- /copyright -->
        </div>
    </div>
</footer>
<!-- /footer -->

</div>
<!-- /wrapper -->

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

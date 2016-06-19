<!-- sidebar footer -->

<?php if (get_field('kauflinks', 'option')) : ?>
    <div class="footer-widget-full">
        <h3>Hier die Kauflinks</h3>
    </div>
<?php else : ?>
    <div class="footer-widget">
        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widgets-1'))  ?>
    </div>
    <div class="footer-widget">
        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widgets-2'))  ?>
    </div>
    <div class="footer-widget">
        <?php
        $kontaktHeadline = get_field('kontaktdaten_headline', 'option');
        $kontakt = get_field('kontaktdaten', 'option');
        if ($kontakt) :
            ?>
            <div class="side">
                <?php if ($kontaktHeadline) : ?>
                    <h3><?php echo $kontaktHeadline; ?></h3>
                <?php endif; ?>
                <?php echo $kontakt; ?>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>
<!-- /sidebar footer -->

<!-- sidebar footer -->
<?php if(get_field('kauflinks','option')) :?>
<h3>Hier die Kauflinks</h3>
<?php else :?>
<div class="footer-widget col-sm-6">
    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widgets-1'))   ?>
</div>
<div class="footer-widget col-sm-6">
    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widgets-2'))  ?>
</div>
<?php endif;?>
<!-- /sidebar footer -->

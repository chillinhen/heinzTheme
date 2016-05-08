<?php $header_image = get_field('header_bild','option');
 if (!empty($header_image)) :
    // vars
    $url = $header_image['url'];
    $title = $header_image['title'];
    $alt = $header_image['alt'];
    ?>
<a class="header-image" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo $title; ?>">
    	<img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" />
</a>
<?php endif; ?>

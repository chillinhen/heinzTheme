<?php $header_image = get_header_image();
if (!empty($header_image)) {
    ?>
    <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
        <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
    </a>
<?php
} // end if ( ! empty( $header_image ) ) ?>
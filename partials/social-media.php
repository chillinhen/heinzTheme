<?php

// check if the repeater field has rows of data
if( have_rows('social_media_links','option') ):?>
<ul class="social-media">
 <?php	// loop through the rows of data
    while ( have_rows('social_media_links','option') ) : the_row();
    
        // display a sub field value
        $link = get_sub_field('link');
        $class = get_sub_field('linkname');
        $linkname = get_sub_field('linkname');
        $format = '<li class="%s"><a href="%s" target="_blank"><span>%s</span></a></li>';
        echo sprintf($format,$class,$link,$linkname);

    endwhile;
    ?>

</ul>
<?php else :

    // no rows found

endif;

?>
<?php
$buttonLink = get_field('button-link');
$buttonName = get_field('button-name');
//$buttonBG = get_field('hintergrundfarbe');
$buttonCOL = get_field('schriftfarbe');
$button = '<section class="button-section"><a class="button cta" href="%s" style="border: 2px solid %s;color:%s;">%s</a></section>';
?>
<?php if($buttonName):
    echo sprintf($button, $buttonLink, $buttonCOL, $buttonCOL, $buttonName);
endif; 
?>


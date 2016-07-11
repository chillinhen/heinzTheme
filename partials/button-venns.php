<?php
$buttonLink = get_field('venn-button-link');
$buttonName = get_field('venn-button-name');
$buttonBG = get_field('venn-button-hintergrundfarbe');
$buttonCOL = get_field('venn-button-schriftfarbe');
$button = '<section class="button-section"><a class="button cta" href="%s#main-menu" style="border: 2px solid %s;color:%s;background-color:%s;">%s</a></section>';
?>
<?php if($buttonName):
    echo sprintf($button, $buttonLink, $buttonCOL, $buttonCOL,$buttonBG, $buttonName);
endif; 
?>


<?php
$buttonLink = get_field('button-link');
$buttonName = get_field('button-name');
$buttonBG = get_field('hintergrundfarbe');
$buttonCOL = get_field('schriftfarbe');
$button = '<div class="row"><div class="col-sm-12 text-center"><a href="%s" class="btn" style="background:%s;color:%s;">%s</a></div></div>';
?>
<?php if($buttonName):
    echo sprintf($button, $buttonLink, $buttonBG, $buttonCOL, $buttonName);
endif; 
?>


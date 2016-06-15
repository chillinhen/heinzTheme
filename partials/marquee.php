<?php
$nachricht = get_field('nachricht', 'option');
if ($nachricht) :
    ?>
    <div id="marquee">
		<?php echo $nachricht; ?>
    </div>
<?php endif; ?>
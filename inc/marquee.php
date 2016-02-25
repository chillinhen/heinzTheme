<?php
$nachricht = get_field('nachricht', 'option');
if ($nachricht) :
    ?>
    <div class="marquee">
        <div class="container">
            <?php echo $nachricht; ?>
        </div>
    </div>
<?php endif; ?>
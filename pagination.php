<!-- pagination -->
<div class="container paging">
    <div class="pagination">
	<?php html5wp_pagination(); ?>
    </div>
<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('search'))  ?>
</div>

<!-- /pagination -->

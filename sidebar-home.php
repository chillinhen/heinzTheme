<?php
/**
 * The sidebar containing the main widget area
 *
 * @package _tk
 */
?>

	</div><!-- close .main-content-inner -->

	<div class="sidebar col-sm-12 col-md-4">

		<?php // add the class "panel" below here to wrap the sidebar in Bootstrap style ;) ?>
		<div class="sidebar-padder">

			<?php do_action( 'before_sidebar' ); ?>
                        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-home'))  ?>

		</div><!-- close .sidebar-padder -->

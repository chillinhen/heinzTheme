<!-- sidebar -->
<aside class="sidebar" role="complementary">
	<?php 
		$args = array('child_of' => 5);
		$categories = get_categories( $args );
		if ($categories) : ?>
			<div class="subcategories">
			<h3><?php _e('Programmarchiv', 'heinzTheme'); ?></h3>
			<?php foreach($categories as $category) :
			    echo '<a class="catlink" href="' . get_category_link( $category->term_id ) . '#main-menu" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a>';
			    echo '<p class="description">'. $category->description . '</p>';
			endforeach;?>
			</div>
		<?php endif; ?>

	
	
	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-events')) ?>
	</div>

	

</aside>
<!-- /sidebar -->

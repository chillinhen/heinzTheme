<?php
function my_custom_post_carousel() {
  $labels = array(
    'name'               => _x( 'Carousel', 'post type general name' ),
    'singular_name'      => _x( 'Carousel-Bild', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Carousel' ),
    'edit_item'          => __( 'Edit Carousel' ),
    'new_item'           => __( 'New Carousel' ),
    'all_items'          => __( 'All Carousel' ),
    'view_item'          => __( 'View Carousel' ),
    'search_items'       => __( 'Search Carousel' ),
    'not_found'          => __( 'No carousels found' ),
    'not_found_in_trash' => __( 'No carousels found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Carousel'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our carousels and carousel specific data',
    'public'        => true,
    'menu_position' => 10,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
  );
  register_post_type( 'carousel', $args ); 
}
add_action( 'init', 'my_custom_post_carousel' );
?>
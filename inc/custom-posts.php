<?php 
//Carousel
add_action('init', 'my_custom_post_carousel');
function my_custom_post_carousel() {
    $labels = array(
        "name" => "Carousel",
        "singular_name" => "Carousel",
    );

    $args = array(
        "labels" => $labels,
        "description" => "alle Carouselschnipsel mit Bild",
        "public" => true,
        'menu_position' => 5,
        "show_ui" => true,
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "carousel", "with_front" => true),
        "query_var" => true,
        "supports" => array("title", "revisions", "thumbnail"), "taxonomies" => array('category', 'post_tag'));
    register_post_type("carousel", $args);
}
function my_custom_post_merchandise() {
  $labels = array(
    'name'               => _x( 'Merchandising', 'post type general name' ),
    'singular_name'      => _x( 'Merchandising', 'post type singular name' ),
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Infos und Bilder zu Artikeln wie Cds, u.ä.',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
    "taxonomies" => array('category', 'post_tag')
  );
  register_post_type( 'merchandise', $args ); 
}
add_action( 'init', 'my_custom_post_merchandise' );
?>
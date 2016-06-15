// Define Sidebar Events
register_sidebar(array(
    'name' => __('Sidebar Events', 'heinzTheme'),
    'description' => __('Hier die Widgets, die nur auf HeinLive angezeigt werden sollen', 'heinzTheme'),
    'id' => 'sidebar-events',
    'before_widget' => '<div id="%1$s" class="%2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
));
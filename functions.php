<?php
//nav menu
function header_menu() {
    register_nav_menu('header-menu',__('Header Menu'));
}
add_action( 'init', 'header_menu' ); 

function my_excerpt_length($length){
	return 30;
}
add_filter('excerpt_length', 'my_excerpt_length');
add_theme_support('post-thumbnails', array('post', 'page'));

function my_register_sidebars() {
    /* Register the 'main' sidebar. */
    register_sidebar(
        array(
            'name' => 'main Sidebar',
			'id' => 'main-sidebar',
			'description' => 'Widgets for the main sidebar.',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>'
        )
    );
}
add_action( 'widgets_init', 'my_register_sidebars' );
<?php

//Enregistrer les menus dans l'admin
register_nav_menus( array(
    'main-menu' => 'Menu principal',
    'footer-menu' => 'Footer menu',
    'social' => 'menu social'
));

//Ajouter les images mise en avant dans l'admin
add_theme_support('post-thumbnails');
	// Ajouter les tailles
	add_image_size('single-post', 350, 250);
	add_image_size('footer-post', 100, 100);
	add_image_size('Hero-one', 520, 320);
	add_image_size('Hero-post', 180, 160);

//Enregistrer les différentes zones de Widgets dans l'admin
function notux_widgets_init() {	
		$sidebar1 = array(
			'name'			=> __( 'Sidebar', 'FooDog-Theme' ),
			'id'			=> 'zone-widgets-1',
			'description'	=> __( 'widgets pour la Sidebar.', 'FooDog-Theme' ),
	        'before_widget' => '<div class="widget %2$s">',
	        'after_widget' => '</div>',
	        'before_title' => '<h2 class="widgettitle">',
	        'after_title' => '</h2>' 
	    );  
	    $sidebar2 = array(
	    	'name'			=> __( 'Header', 'FooDog-Theme' ),
			'id'			=> 'zone-widgets-2',
			'description'	=> __( 'widgets pour la Sidebar.', 'FooDog-Theme' ),
	        'before_widget' => '<div class="widget %2$s">',
	        'after_widget' => '</div>',
	        'before_title' => '<h2 class="widgettitle">',
	        'after_title' => '</h2>'
	    );
		register_sidebar($sidebar1);
		register_sidebar($sidebar2);
}

add_action( 'widgets_init', 'notux_widgets_init' );

//Parametrer l'extrait
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function wpdocs_excerpt_more( $more ) {
    return '';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
<?php 
function four_faces(){
	wp_enqueue_style('four_faces-style',get_stylesheet_uri());
	// wp_enqueue_style('four_faces-bootstrap',get_stylesheet_directory_uri().'/css/bootstrap.css');
	// wp_enqueue_style('four_faces-fonts',get_stylesheet_directory_uri().'/css/font-awesome.css');
	// wp_enqueue_style('four_faces-jquerymax',get_stylesheet_directory_uri().'/css/jquery.maximage.css');
	// wp_enqueue_style('four_faces-simplelightbox',get_stylesheet_directory_uri().'/css/simplelightbox.min.css');
	// wp_enqueue_style('four_faces-style',get_stylesheet_directory_uri().'/css/style.css');
	wp_enqueue_script( 'four_faces-jquery2', get_template_directory_uri() . '/js/jquery-2.1.4.min.js');
	wp_enqueue_script( 'four_faces-bootstrapjs', get_stylesheet_directory_uri() . '/js/bootstrap.min.js');
	
	
	wp_enqueue_script( 'four_faces-jquery', get_template_directory_uri() . '/js/jquery.js');
	wp_enqueue_script( 'four_faces-easing', get_template_directory_uri() . '/js/easing.js');
	wp_enqueue_script( 'four_faces-easyResponseTabs', get_template_directory_uri() . '/js/easyResponsiveTabs.js');
	wp_enqueue_script( 'four_faces-jquerymaxjs', get_template_directory_uri() . '/js/jquery.maximage.js');
	wp_enqueue_script( 'four_faces-cycle', get_template_directory_uri() . '/js/jquery.cycle.all.js');
	
	wp_enqueue_script( 'four_faces-jmobile', get_template_directory_uri() . '/js/jquery.mobile.custom.min.js');
	wp_enqueue_script( 'four_faces-moderniza', get_template_directory_uri() . '/js/modernizr.custom.97074.js');
	wp_enqueue_script( 'four_faces-movetop', get_template_directory_uri() . '/js/move-top.js');
	wp_enqueue_script( 'four_faces-responsiveslides', get_template_directory_uri() . '/js/responsiveslides.min.js');
	wp_enqueue_script( 'four_faces-simplelightboxjs', get_template_directory_uri() . '/js/simple-lightbox.min.js');
	wp_enqueue_style( 'four_faces-fontawesome', get_template_directory_uri() . '/fonts/FontAwesome.otf');
	wp_enqueue_style( 'four_faces-fontawesomeweb', get_template_directory_uri() . '/fonts/fontawesome-webfont.ttf');
	// wp_enqueue_style( 'four_faces-glyphicons', get_template_directory_uri() . '/fonts/glyphicons-haflings-regular.ttf');

	
}
add_action( 'wp_enqueue_scripts', 'four_faces' );



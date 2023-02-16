<?php 

add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.min.css' );
	
	wp_enqueue_script( 'fontawesome', get_template_directory_uri() . '/assets/js/fontawesome.js', array(), 'null', true);
	wp_enqueue_script( 'accordionn', get_template_directory_uri() . '/assets/js/accordionn.js', array(), 'null', true);
	wp_enqueue_script( 'burger-opener', get_template_directory_uri() . '/assets/js/burger-opener.js', array(), 'null', true);
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), 'null', true);
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), 'null', true);
	wp_enqueue_script( 'slick-current-set', get_template_directory_uri() . '/assets/js/slick-current-set.js', array('slick'), 'null', true);
	wp_enqueue_script( 'slider', get_template_directory_uri() . '/assets/js/slider.js', array(), 'null', true);
	wp_enqueue_script( 'video', get_template_directory_uri() . '/assets/js/video.js', array(), 'null', true);
	wp_enqueue_script( 'video-catalog', get_template_directory_uri() . '/assets/js/video-catalog.js', array(), 'null', true);
	
	// wp_register_script( 'fontawesome', get_template_directory_uri() . 'https://kit.fontawesome.com/e5b88955d2.js', array(), 'null', true);
	// wp_enqueue_script( 'fontawesome');
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
// register_taxonomy();



?>

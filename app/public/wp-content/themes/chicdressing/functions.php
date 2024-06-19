<?php 

add_action( 'wp_enqueue_scripts', 'chicdressing_enqueue_styles' );
function chicdressing_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
}

add_filter( 'big_image_size_threshold', '__return_false' );


function remove_google_fonts_stylesheet() {  
    wp_dequeue_style( 'google-fonts-roboto' );
}
add_action( 'wp_enqueue_scripts', 'remove_google_fonts_stylesheet', 999 );
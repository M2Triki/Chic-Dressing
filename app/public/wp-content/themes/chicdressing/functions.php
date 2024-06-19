<?php 

add_action( 'wp_enqueue_scripts', 'chicdressing_enqueue_styles' );
function chicdressing_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
}

add_filter( 'big_image_size_threshold', '__return_false' );


function allow_custom_upload_mimes($existing_mimes) {
    // Ajouter les types MIME pour les polices
    $existing_mimes['ttf'] = 'font/ttf';
    $existing_mimes['woff'] = 'font/woff';
    $existing_mimes['woff2'] = 'font/woff2';
    $existing_mimes['otf'] = 'font/otf';
    return $existing_mimes;
}
add_filter('upload_mimes', 'allow_custom_upload_mimes');


 
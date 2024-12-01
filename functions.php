<?php
function a2_your_theme_enqueue_styles() {
    // Enqueue the main style.css
    wp_enqueue_style( 'a2-your-username-style', get_stylesheet_uri() );

    // Optionally, enqueue any additional CSS or JS files here
    wp_enqueue_script( 'a2-your-username-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'a2_your_theme_enqueue_styles' );
function a2_your_theme_register_menus() {
    register_nav_menus( array(
        'main_menu' => __( 'Main Menu', 'a2-your-username' ),
    ) );
}
add_action( 'after_setup_theme', 'a2_your_theme_register_menus' );

?>


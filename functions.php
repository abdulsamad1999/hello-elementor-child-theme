<?php
// Enqueue parent theme styles
function hello_elementor_child_enqueue_styles() {
    // Enqueue parent theme stylesheet
    wp_enqueue_style( 'hello-elementor-parent', get_template_directory_uri() . '/style.css' );

    // Enqueue child theme stylesheet
    wp_enqueue_style( 'hello-elementor-child', get_stylesheet_uri(), array('hello-elementor-parent'), wp_get_theme()->get('Version') );
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_styles' );
?>

<!-- Add your custom code below -->
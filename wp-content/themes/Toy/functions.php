<?php 

add_action('wp_enqueue_scripts','toys_scripts');

function toys_scripts () {
    wp_enqueue_style('toys-style',get_stylesheet_uri());
    wp_enqueue_script( 'toys-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true );
};




?>
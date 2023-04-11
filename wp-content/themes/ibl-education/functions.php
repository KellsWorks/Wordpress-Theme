<?php

function enqueue_styles() {
    wp_enqueue_style( 'tailwind', get_template_directory_uri().'/tailwind.css', array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );

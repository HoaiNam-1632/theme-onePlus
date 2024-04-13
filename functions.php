<?php

function load_assets(){
        wp_enqueue_style("indexcss", get_theme_file_uri(). "/css/index.css", array(), "1.0.2", 'all');
        wp_register_script( 'indexJS', get_template_directory_uri().'/js/index.js', array(), '1.1', true );
        wp_enqueue_script( 'indexJS' );
        wp_enqueue_script('icon', 'https://kit.fontawesome.com/ce6c7954c2.js', false, null, true);
        

}

add_action("wp_enqueue_scripts", "load_assets");

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

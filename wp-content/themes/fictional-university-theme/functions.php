<?php

function university_files()
{

    wp_enqueue_script('university_main_script', get_theme_file_uri('./js/scripts-bundled.js'), NULL, microtime(), true);
    wp_enqueue_style('roboto-condensed-font', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('university_main_styles', get_stylesheet_uri(), NULL, microtime());

}

add_action('wp_enqueue_scripts', 'university_files');


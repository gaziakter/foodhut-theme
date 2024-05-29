<?php

/**
 * enqueue scripts and styles.
 */
function foodhut_style_scripts()
{
    wp_enqueue_style('themify-icons', get_template_directory_uri() . '/assets/vendors/themify-icons/css/themify-icons.css', array(), '1.0.0', 'all');
    wp_enqueue_style('animate-style', get_template_directory_uri() . '/assets/vendors/animate/animate.css', array(), '1.0.0', 'all');
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/foodhut.css', array(), '1.0.0', 'all');
    wp_enqueue_style('foodhut-style', get_stylesheet_uri());

    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/vendors/bootstrap/bootstrap.bundle.js', array('jquery'), '4.0.0', true);
    wp_enqueue_script('bootstrap-affix.js', get_template_directory_uri() . '/assets/vendors/bootstrap/bootstrap.affix.js', array('jquery'), '4.0.0', true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/vendors/wow/wow.js', array('jquery'), '4.0.0', true);
    wp_enqueue_script('foodhut-js', get_template_directory_uri() . '/assets/js/foodhut.js', array(), '1.0.0', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'foodhut_style_scripts');

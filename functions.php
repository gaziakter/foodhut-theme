<?php 
    /**
 * Essential theme supports
 * */
function foodhut_support(){

    /** automatic feed link*/
    add_theme_support( 'automatic-feed-links' );

    /** tag-title **/
    add_theme_support( 'title-tag' );

    /** post formats */
    $post_formats = array(
        'aside',
        'image',
        'gallery',
        'video',
        'audio',
        'link',
        'quote',
        'status'
    );
    add_theme_support( 'post-formats', $post_formats);

    /** post thumbnail **/
    add_theme_support( 'post-thumbnails' );

    /** refresh widgest **/
    add_theme_support( 'customize-selective-refresh-widgets' );

    /** HTML5 support **/
    add_theme_support( 'html5', array( 
        'comment-list', 
        'comment-form', 
        'search-form', 
        'gallery', 
        'caption' 
        ) );

    /** Register Menus */
    register_nav_menus( array(
        'header-left-menu'     =>  __('Header Left Menu', 'foodhut'),
        'header-right-menu'     =>  __('Header Right Menu', 'foodhut'),
    ) );

    /** Remove blog editior */
    remove_theme_support( 'widgets-block-editor' );

}

add_action( 'after_setup_theme', 'foodhut_support' );

/** Include files */
include_once('inc/common/scripts.php');
include_once('inc/template-functions.php');
include_once('inc/common/nav-walker.php');

if(class_exists('kirki')){
    include_once('inc/foodhut-kirki.php');
}
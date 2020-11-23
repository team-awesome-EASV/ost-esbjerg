<?php

function ostPracticeResources()
{
    wp_enqueue_style( 'fonts', 'https://use.typekit.net/wny5ldn.css');
    wp_enqueue_style('style', get_stylesheet_uri());
    
}

add_action('wp_enqueue_scripts', 'ostPracticeResources');

function loadScripts() {
    wp_enqueue_script( 'theme',  get_stylesheet_directory_uri() . '/scripts/theme.js',  [
        'jquery',
        
      ], time(), true );
}

add_action( 'wp_enqueue_scripts', 'loadScripts' );

//navigation menus

function setup_menus()
{
    register_nav_menu("header_menu", __("Header menu"));
}

add_action("init", "setup_menus");

function get_top_ancestor_id()
{

    global $post;

    if ($post->post_parent) {
        $ancestors = array_reverse(get_post_ancestors($post->ID));
        return $ancestors[0];

    }
    ;

    return $post->ID;

}
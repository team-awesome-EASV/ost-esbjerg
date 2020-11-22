<?php

function ostPracticeResources()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'ostPracticeResources');

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
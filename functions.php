<?php

function ostPracticeResources() {
    wp_enqueue_style( 'style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'ostPracticeResources');

//navigation menus

function setup_menus()
{
	register_nav_menu("header_menu", __("Header menu"));
	register_nav_menu("footer_menu", __("Footer menu"));
}

add_action("init", "setup_menus");

?>
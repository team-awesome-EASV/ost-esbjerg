<!DOCTYPE html>
<html <?php language_attributes();?>>

    <head>
        <meta charset="<?php bloginfo('charset');?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php bloginfo("name");?></title>
        <?php wp_head();?>
    </head>

    <body <?php body_class();?>>
        <div class="nav-container">
            <header class="site-header">
                <nav class="site-nav">
                    <img class="nav-logo" src="<?php echo get_bloginfo( 'template_directory' ); ?>/static-assets/OSTLOGO.png" alt="">
                    <?php wp_nav_menu(array("theme_location" => "header_menu"))?>
                </nav>
            </header>
            <div class="find-us-wrapper">
                <div class="marquee">
                    <span class="find-us-banner marquee__item">FIND US  FIND US  FIND US</span>
                    <span class="find-us-banner marquee__item">FIND US  FIND US  FIND US</span>
                    <span class="find-us-banner marquee__item">FIND US  FIND US  FIND US</span>
                    <span class="find-us-banner marquee__item">FIND US  FIND US  FIND US</span>
                    <span class="find-us-banner marquee__item">FIND US  FIND US  FIND US</span>
                    <span class="find-us-banner marquee__item">FIND US  FIND US  FIND US</span>
                    <span class="find-us-banner marquee__item">FIND US  FIND US  FIND US</span>
                    <span class="find-us-banner marquee__item">FIND US  FIND US  FIND US</span>
                    <span class="find-us-banner marquee__item">FIND US  FIND US  FIND US</span>
                    <span class="find-us-banner marquee__item">FIND US  FIND US  FIND US</span>
                    <span class="find-us-banner marquee__item">FIND US  FIND US  FIND US</span>
                    <span class="find-us-banner marquee__item">FIND US  FIND US  FIND US</span>
                </div>
            </div>
            
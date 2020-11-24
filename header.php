<!DOCTYPE html>
<html <?php language_attributes();?>>

    <head>
        <meta charset="<?php bloginfo('charset');?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php bloginfo("name");?></title>
        <?php wp_head();?>
    </head>

    <body <?php body_class();?>>
            <header class="site-header">
                <nav class="site-nav">
                    <img class="nav-logo" src="<?php echo get_bloginfo( 'template_directory' ); ?>/static-assets/OSTLOGO.png" alt="">
                   <div class="nav-menu"><?php wp_nav_menu(array("theme_location" => "header_menu"))?></div> 
                    <a class="toggle-nav-icon" href="#">&#9776;</a>
                </nav>
            </header>
            <nav class="mobile-menu">
                    <div class="mobile-nav-container">
                        <?php wp_nav_menu(array("theme_location" => "mobile_menu"))?>
                    </div>
            </nav>
            <div class="find-us-wrapper">
                <div class="marquee">
                    <span class="find-us-banner marquee__item">FIND US</span>
                    <span class="find-us-banner marquee__item">FIND US</span>
                    <span class="find-us-banner marquee__item">FIND US</span>
                    <span class="find-us-banner marquee__item">FIND US</span>
                    <span class="find-us-banner marquee__item">FIND US</span>
                    <span class="find-us-banner marquee__item">FIND US</span>
                    <span class="find-us-banner marquee__item">FIND US</span>
                    <span class="find-us-banner marquee__item">FIND US</span>
                    <span class="find-us-banner marquee__item">FIND US</span>
                    <span class="find-us-banner marquee__item">FIND US</span>
                    <span class="find-us-banner marquee__item">FIND US</span>
                    <span class="find-us-banner marquee__item">FIND US</span>
                    <span class="find-us-banner marquee__item">FIND US</span>
                    <span class="find-us-banner marquee__item">FIND US</span>
                    <span class="find-us-banner marquee__item">FIND US</span>
                    <span class="find-us-banner marquee__item">FIND US</span>
                    <span class="find-us-banner marquee__item">FIND US</span>
                    <span class="find-us-banner marquee__item">FIND US</span>
                </div>
            </div>
            
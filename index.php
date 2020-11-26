<?php
get_header()
?>


<main class="news">

    <div class="news__hero">
        <div class="news__hero__picture" style="background-image: url(<?php echo get_bloginfo( 'template_directory' ); ?>/static-assets/news-titile-pic.jpg);"></div>

        <div class="news__hero__ornament1" style="background-image: url(<?php echo get_bloginfo( 'template_directory' ); ?>/static-assets/svg/cheese-roll.svg);"></div>

        <div class="news__hero__ornament2" style="background-image: url(<?php echo get_bloginfo( 'template_directory' ); ?>/static-assets/svg/olives.svg);"></div>
        <div class="news__hero__text">
        
            <div class="news__hero__text__wrapper">
                <h1>Nyheder</h1>
                <ul class="hero__recent_posts">
                    <?php
                        $recent_posts = wp_get_recent_posts();
                        foreach( $recent_posts as $recent ) {
                            printf( '<li><a href="%1$s">%2$s</a></li>',
                                esc_url( get_permalink( $recent['ID'] ) ),
                                apply_filters( 'the_title', $recent['post_title'], $recent['ID'] )
                            );
                        }
                    ?>
                </ul>
                <div class="news__hero__ornament3" style="background-image: url(<?php echo get_bloginfo( 'template_directory' ); ?>/static-assets/svg/multi-element.svg);"></div>
            </div>

        </div>
    </div>

    <?php
    if (have_posts()):
        while (have_posts()): the_post();?>
  
    <div class="post">
        <div class="post__img" style="background-image: url(<?php echo get_first_image() ?>);">
            
           
        </div>
            <div class="post__content">
                <h2><a href="<?php the_permalink()?>"> <?php the_title()?></a> </h2>
                <?php if( get_field('sub_header') ): ?>
                <h3><?php the_field('sub_header'); ?></h3>
                <?php endif; ?>
                <span class="post__content__date"><?php the_author()?> @ <?php the_date()?> </span>
                <p><?php echo strip_shortcodes(wp_trim_words( get_the_content(), 50 )); ?></p>
                <a href="<?php the_permalink()?>"><button>Mere...</button></a>
                <div class="post__content__ornament" >
                <?php get_template_part( 'inline-svg-rando/inline', random_inline_svg() ) ?>
                </div>
            </div> 
    </div> 
   
    
    <?php endwhile;
    else:
        echo '<p>No content found</p>';
    endif;
    ?>
</main>
<?php
get_footer()
?>
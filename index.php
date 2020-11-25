<?php
get_header()
?>


<main class="news">
    <?php
    if (have_posts()):
        while (have_posts()): the_post();?>
    <article>
    <div class="post">
        <div class="post__img" style="background-image: url(<?php echo get_first_image() ?>);">
            
           
        </div>
            <div class="post__content">
                <h2><a href="<?php the_permalink()?>"> <?php the_title()?></a> </h2>
                <span><?php the_date()?> @ <?php the_time()?></span>
                <p><?php get_the_content()?></p>
                <div class="post__content__ornament" >
                <?php get_template_part( 'inline-svg-rando/inline', random_inline_svg() ) ?>
                </div>
            </div> 
    </div> 
    </article>
    
    <?php endwhile;
    else:
        echo '<p>No content found</p>';
    endif;
    ?>
</main>
<?php
get_footer()
?>
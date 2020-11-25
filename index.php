<?php
get_header()
?>


<main class="news">
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
                <p><?php echo wp_strip_all_tags( get_the_content() );?></p>
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
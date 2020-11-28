 <?php get_header()?>
 <main class="single">
    
     <?php if (have_posts()): ?>

     <div class="single__post">
         <?php while (have_posts()): the_post()?>

         <h1>
             <?php the_title()?>
         </h1>
        
         <?php if( get_field('sub_header') ): ?>
                <h2><?php the_field('sub_header'); ?></h2>
                <?php endif; ?>
                <span class="post__content__date"><?php the_author()?> @ <?php the_date()?> </span>
         <div>
             <?php the_content()?>
         </div>


         <?php endwhile;?>

     </div>


     <?php endif;?>
 </main>




 <?php get_footer()?>
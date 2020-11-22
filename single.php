 <?php get_header()?>
 <main>

     <?php if (have_posts()): ?>

     <div class="single">
         <?php while (have_posts()): the_post()?>

         <h3>
             <?php the_title()?>
         </h3>
         <div>
             <?php the_content()?>
         </div>


         <?php endwhile;?>

     </div>


     <?php endif;?>
 </main>




 <?php get_footer()?>
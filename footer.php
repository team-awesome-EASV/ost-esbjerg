<footer class="site-footer">
    <p>
         <nav class="site-nav">
          
            <?php wp_nav_menu(array("theme_location" => "footer_menu")) ?>
        </nav>

         <?php bloginfo( 'name' ); ?> - &copy; <?php echo date('Y');?></p>


</footer>

<?php  wp_footer();?>
</div> <!--container -->
</html>
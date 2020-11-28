<footer class="footer">
   
    <div class="footer__container">
        <div class="footer__container-info">
            <div class="footer__section">
            
                <span class="footer__section__header">
                    undersider
                </span>
                
                <?php wp_nav_menu(array("theme_location" => "header_menu"))?>
        
            </div>
              
           
            <div class="footer__section">
                <span class="footer__section__header">
                Åbningstider
                </span>
                <ul>
                    <li>Man - Fre: 10:00 - 17:00</li>
                    <li>Lør: 09:00 - 13:00</li>
                    <li>Søn: Lukket</li>
                </ul>
            </div>
        
            <div class="footer__section">
                <span class="footer__section__header">
                Kontakt
                </span>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> <a href="https://goo.gl/maps/wFeaSTBKNnoL7xcg7" target="_blank">Torvegade 38 6700, Esbjerg</a></li>
                    <li><i class="fas fa-phone-alt"></i> <a href="tel:+4575122057">+45 75 12 20 57</a></li>
                    <li><i class="fas fa-envelope"></i> <a href="mailto:kontakt@ostesbjerg.dk">kontakt@ostesbjerg.dk</a></li>
                </ul>
            </div>
        </div>
    
        <div class="footer__container-logo">
        <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static-assets/OSTLOGO.png" alt="">
        </div>
    </div>

    <p>
    <?php bloginfo('name');?> - &copy; Ost ApS <?php echo date('Y'); ?> || design&development: team awesome
    </p>


</footer>

<?php wp_footer();?>
</body>
<!--container -->


</html>
<footer class="site-footer">
    <div class="nav-menu"><?php wp_nav_menu(array("theme_location" => "header_menu"))?></div>>
        <ul>Undersider</ul>
            <li>Hjem</li>
            <li>Produkter</li>
            <li>Nyheder</li>
            <li>Om os</li>
    </div>
    <div>
        <ul>Åbningstider</ul>
            <li>Man - Fre: 10:00 - 17:00</li>
            <li>Lør: 09:00 - 13:00</li>
            <li>Søn: Lukket</li>
    </div>
    <div>
        <ul>Kontakt<ul>
            <li>Torvegade 38 6700, Esbjerg</li>
            <li>+45 75 12 20 57</li>
            <li>kontakt@ostesbjerg.dk</li>
    </div>
        <p>
        <?php bloginfo('name');?> - &copy; <?php echo date('Y'); ?></p>


</footer>

<?php wp_footer();?>
</div>
<!--container -->


</html>
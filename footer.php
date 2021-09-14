<footer>
    <div class="footer-top">
        <div class="logo-footer"><?php if ( dynamic_sidebar('footer') ) : else : endif; ?></div>
        <div class="menu_footer"><?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?></div>
    </div>
    <div class="rights">
        <span>Clicklig - Todos os direitos reservados - 2021</span>
    </div>
</footer>


<?php wp_footer()?>

</body>

</html>
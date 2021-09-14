<section class="topo">

 <div class="menu-topo"><?php wp_nav_menu( array( 'theme_location' => 'top-menu' ) ); ?></div>   
 <div class="search"><?php if ( dynamic_sidebar('search') ) : else : endif; ?></div>

</section>
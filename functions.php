<?php

    function ed_custom_logo() {
      add_theme_support('custom-logo'); 
    }
    add_action('after_setup_theme', 'ed_custom_logo');

    function register_my_menus() {
        register_nav_menus(
          array(
            'header-menu' => __( 'Header Menu' ),
            'top-menu' => __( 'Top Menu' ),
            'footer' => __( 'Footer' )
          )
        );
      }
    add_action( 'init', 'register_my_menus' );

       
    function widgets_novos_widgets_init() {
        
        register_sidebar( 
          
          array(
                'name' => 'Search',
                'id' => 'search',
                'before_widget' => '<div>',
                'after_widget' => '</div>',
                'before_title' => '<h2>',
                'after_title' => '</h2>',
        ),      
  
      );

      register_sidebar( 
          
        array(
              'name' => 'Logo Footer',
              'id' => 'footer',
              'before_widget' => '<div>',
              'after_widget' => '</div>',
              'before_title' => '<h2>',
              'after_title' => '</h2>',
      ),      

    );

    register_sidebar( 
          
      array(
            'name' => 'Sidebar',
            'id' => 'sidebar',
            'before_widget' => '<div>',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>',
    ),      

  );

        register_post_type( 'destaque',

            array(
              'labels' => array(
              'name' => __( 'Destaque ' ),
              'singular_name' => __( 'Destaque' )
              ),
        
              'public' => true,
              'has_archive' => 'destaque',
              'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes' ),
              'menu_icon' => 'dashicons-images-alt2',
            )
          );
            
        }
    add_action( 'widgets_init', 'widgets_novos_widgets_init' );

  
    
    add_action( 'after_setup_theme', 'setup_features' );
    function setup_features() {
        add_theme_support( 'post-thumbnails' );
    }

    function custom_excerpt_length( $length ) {
      return 10;
     }
     add_filter( 'excerpt_length', 'custom_excerpt_length');

?>
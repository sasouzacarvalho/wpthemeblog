<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<div id="main">

  <div class="homepage">

    <section class="topo-home">
      <?php if ( '' === locate_template( 'components/breadcrumb.php', true, false ) )
        include( 'components/breadcrumb.php' ); ?>
      <?php if ( '' === locate_template( 'components/topo.php', true, false ) )
        include( 'components/topo.php' ); ?>

    </section>

    <section class="destaque">
      <?php if ( '' === locate_template( 'components/destaque.php', true, false ) )
          include( 'components/destaque.php' ); ?>
    </section>

    <section class="content">

      <div class="posts_news">
      
          <?php while (have_posts()) : the_post(); ?>
           
            <div class="conteudo">
                     
                <div class="categorypost" id="post-<?php the_ID(); ?>"><?php $categoria = get_the_category(); $nomeCategoria = $categoria[0]->cat_name; echo $nomeCategoria; ?></div>
                
                <div class="imagepost"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
                
                <div class="title"><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?><br></a></h3></div>
                
                <div class="text"><p><?php the_excerpt()?></p></div>

                <div class="mais"><a href="<?php the_permalink(); ?>">Leia mais</a></div>
                  
            </div>
            
          <?php endwhile; ?>     
          
      </div>

    </section>

  </div>

</div>
<?php get_footer(); ?>
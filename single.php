<?php get_header(); ?>

<div id="main">

<div class="homepage">
  
<section class="topo-home">
      <?php if ( '' === locate_template( 'components/breadcrumb.php', true, false ) )
        include( 'components/breadcrumb.php' ); ?>
      <?php if ( '' === locate_template( 'components/topo.php', true, false ) )
        include( 'components/topo.php' ); ?>

    </section>
</div>

  <div class="interna">

    <section class="content">

      <div class="sidebar">
                 <?php if ( dynamic_sidebar('sidebar') ) : else : endif; ?>
      </div>

      <div class="post">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                  <h1><?php the_title(); ?></h1>

                  <p class="data"><?php echo get_the_date(); ?></p>

                  <img src="<?php	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); echo $image[0]; ?>" alt="<?php $img_id = get_post_thumbnail_id(get_the_ID()); echo get_post_meta( $img_id, '_wp_attachment_image_alt', true ); ?>" class="imagemdestacada" />

                  <div class="conteudo">
                      <?php the_content(); ?>
                  </div>

                  <!-- <a href="<//?php bloginfo('url'); ?>/blog" class="btn-verde">Voltar para o blog</a> -->

                  <div class="clear"></div>

                  <div class="share">
                    <ul>
                      <li><span>Compartilhe:</span></li>
                      <li><i class="fab fa-whatsapp"></i><span>WhatsApp</span></li>
                      <li><i class="fab fa-facebook-messenger"></i><span>Messenger</span></li>
                      <li><i class="fab fa-telegram-plane"></i><span>Telegram</span></li>
                    </ul>
                    <p class="link">ou copie o link</p>
                    <span class="link-post" id="btnCopiar"><?php the_permalink(); ?></span>
                  </div>

                  <?php endwhile; else: ?>
                  <p><?php _e( 'Desculpe, nenhum post encontrado.' ); ?></p>
                  <?php endif; ?>



      </div>

    </section> <!--fim content-->

  <section class="recomendados">

  <span>Recomendados pela Clicklig</span>

  <h2>Você também pode gostar</h2>

  <div class="content">
  <?php

    $homepoststwo_query_args = array(
        'post_type' => 'post', 
        'posts_per_page' => 3,
        'post_status' => 'publish',
        'order' => 'DESC',
        'orderby' => 'date',
        'offset' => 1
    );

    $homepoststwo_query = new WP_Query( $homepoststwo_query_args );
    if ( $homepoststwo_query->have_posts() ) : ?>

    <div class="posts_news">
      
    <?php while( $homepoststwo_query->have_posts() ) : $homepoststwo_query->the_post(); ?>
       
        <div class="conteudo">
                 
                       
            <div class="imagepost"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
            
            <div class="title"><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?><br></a></h3></div>
            
            <div class="text"><p><?php the_excerpt()?></p></div>

            <div class="mais"><a href="<?php the_permalink(); ?>">Leia mais</a></div>
                
          </div>
          <?php endwhile; ?>   
        
    </div>
    <?php wp_reset_postdata(); else: echo '<p>'.__('Desculpe, ainda não possuímos nenhum post nessa categoria.').'</p>'; endif; ?>
    </div>
  </section>

  </div><!--fim interna-->

</div><!--fim main-->
<?php get_footer(); ?>
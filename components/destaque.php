    <?php

    $destaque_query_args = array(
    'post_type' => 'destaque', 
    'posts_per_page' => -1,
    'post_status' => 'publish',
    'order' => 'DESC',
    'orderby' => 'date',
    );

    $destaque_query = new WP_Query( $destaque_query_args );

    if ( $destaque_query->have_posts() ) : ?>

    <?php while( $destaque_query->have_posts() ) : $destaque_query->the_post(); ?>
        <div class="image-full">
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?><br></a></h1>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
     
        <span class="barra"></span>

        </div>
<?php endwhile; ?>

<?php wp_reset_postdata(); else: echo '<p>'.__('Desculpe, ainda não possuímos post nessa seção.').'</p>'; endif; ?>

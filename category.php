<?php

get_header(); ?>

<div class="container">
     <div class="page_content">
        <section class="site-main">
            <header class="page-header">
				<h1 class="entry-title"><?php single_cat_title( esc_attr_e('Category: ', '') ); ?></h1>
            </header><!-- .page-header -->
			<?php if ( have_posts() ) : ?>
                <div class="blog-post">
                    <?php /* Start the Loop */ ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'content', get_post_format() ); ?>
                    <?php endwhile; ?>
                </div>
                <?php  
				// Previous/next post navigation.
				the_posts_pagination( array(
							'mid_size' => 2,
							'prev_text' => __( 'Back', '' ),
							'next_text' => __( 'Next', '' ),
				) );
			    ?>
            <?php else : ?>
                <?php get_template_part( 'no-results', 'archive' ); ?>
            <?php endif; ?>
       </section>
       <?php get_sidebar();?>       
        <div class="clear"></div>
    </div><!-- site-aligner -->
</div><!-- container -->

<?php get_footer(); ?>
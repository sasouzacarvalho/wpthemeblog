<?php
get_header(); ?>

<div class="container">
    <div class="page_content erro-404">
        <section class="content-area" id="sitemain">
            <header class="page-header">
                <h1 class="entry-title"><?php esc_html_e( 'Erro 404'); ?></h1>
            </header><!-- .page-header -->
            <div class="page-content">
                <p class="text-404"><?php esc_html_e( 'Ops! Página não encontrada!' ); ?></p>
                <p>Retorne a nossa <a href="/">Página Inicial</a></p>
            </div><!-- .page-content -->
        </section>
        <div class="clear"></div>
    </div>
</div>
<?php get_footer(); ?>
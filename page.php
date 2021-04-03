<?php get_header(); ?>

<div class="page-container">
    <?php
    if (is_page('offerta-formativa')) {
        get_template_part('template-parts/page', 'offertaformativa');
    }

    if (is_page('chi-siamo')) {
        get_template_part('template-parts/page', 'chisiamo');
    }
  
    if (is_page('sostienici')) {
        get_template_part('template-parts/page', 'sostienici');
    }
    
    if(is_page('termini-e-condizioni')) {
        get_template_part('template-parts/page', 'terminicondizioni');
    }

    if(is_page('cookie-policy')) {
        get_template_part('template-parts/page', 'cookiepolicy');
    }
    ?>
</div>

<?php get_footer(); ?>
<?php get_header(); ?>

<div class="page-container">
    <?php
    if (is_page('offerta-formativa')) {
        get_template_part('template-parts/page', 'offertaformativa');
    }
    if (is_page('chi-siamo')) {
        get_template_part('template-parts/page', 'chisiamo');
    }
    ?>
</div>

<?php get_footer(); ?>
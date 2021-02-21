<?php get_header(); ?>

<div class="page-container">
    <?php
    if (is_page('offerta-formativa')) {
        get_template_part('template-parts/page', 'offertaformativa');
    }
    ?>
</div>

<?php get_footer(); ?>
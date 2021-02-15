<!DOCTYPE html>
<!-- Definisce la lingua del sito web -->
<html <?php language_attributes(); ?>>
    <head>
        <!-- Definisce il nome del sito, lo si cambia nelle impostazioni di WordPress -->
        <title><?php bloginfo( 'name' ); wp_title(); ?></title>
        <!-- Definisce la descrizione del sito, la si cambia nelle impostazioni di WordPress -->
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <!-- Definisce il charset del sito, lo si cambia nelle impostazioni di WordPress -->
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <!-- Viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- ATTENZIONE: Nello sviluppo WordPress, per includere delle immagini o qualsiasi altro media o file presente nella cartella
        del progetti è necessario inserire nell'attributo href o scr, a seconda del tag che si sta usando, prima
        'echo get_stylesheet_directory_uri(); dentro i tag PHP di apertura e chiusura e poi inserire uno slash e il percorso dove si trova
        il file che si sta includendo -->

        <!-- Definisce le favicon che ci saranno correlate al sito -->
        <link href="" rel="shortcut icon" type="image/x-icon">
        <link href="" rel="apple-touch-icon-precomposed">
        <link href="" sizes="114x114" rel="apple-touch-icon-precomposed">
        <link href="" sizes="72x72" rel="apple-touch-icon-precomposed">
        <link href="" sizes="144x144" rel="apple-touch-icon-precomposed">
        <!-- Link a tutti i fogli di stile -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/front-page.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/general-styles.css" type="text/css" media="all" />
        <!-- Stili e script di integrazione per Font Awesome -->
        <script src="https://kit.fontawesome.com/0999994394.js" crossorigin="anonymous"></script>
        <link rel=“stylesheet” href=“https://use.fontawesome.com/releases/v5.5.0/css/all.css” integrity=“sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU” crossorigin=“anonymous”>

        <link href="//db.onlinewebfonts.com/c/edeb336ecd776e23d99355eb2b52cbc7?family=NeuzeitGroteskW01-Regular" rel="stylesheet" type="text/css"/>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <!-- Definisce l'head del sito -->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header>
            <div class="topbar">
                <a href="">Sostienici</a>
            </div>
            <div class="flag">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/italian-flag.png" src="" />
            </div>
            <nav class="navbar navbar-expand-lg navbar-light header">
                <div class="container-fluid">
                    <a class="navbar-brand brand-icon" href="<?php echo site_url(''); ?>">
                        <img class="brand-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ero-forestiero-logo-home.png" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item menu-item">
                                <a href="<?php echo site_url('/chi-siamo'); ?>"
                                    <?php if(is_page('chi-siamo')) echo 'class="pagina-attiva"' ?>>Chi siamo
                                </a>
                            </li>
                            <li class="nav-item menu-item">
                                <a href="<?php echo site_url('/offerta-formativa'); ?>"
                                    <?php if(is_page('offerta-formativa')) echo 'class="pagina-attiva"' ?>>Offerta formativa
                                </a>
                            </li>
                            <li class="nav-item menu-item">
                                <a href="<?php echo site_url('/contatti'); ?>"
                                    <?php if(is_page('contatti')) echo 'class="pagina-attiva"' ?>>Contatti
                                </a>
                            </li>
                            <li class="nav-item menu-item">
                                <a href="<?php echo site_url('/blog'); ?>"
                                    <?php if(is_page('blog')) echo 'class="pagina-attiva"' ?>>Blog
                                </a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <button class="btn btn-outline-success volunteer-btn" type="submit">
                                <a href="<?php echo site_url('/diventa-un-volontario'); ?>"
                                    <?php if(is_page('diventa-un-volontario')) echo 'class="pagina-attiva"' ?>>Diventa un volontario
                                </a>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
        </header>

    <main id="main">

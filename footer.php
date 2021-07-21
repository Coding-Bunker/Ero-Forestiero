</main>

<footer class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-xl-3 footer-item">
            <div class="logo-footer">
                <a class="navbar-brand" href="<?php echo site_url(''); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ero-forestiero-logo-footer.png" alt="">
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-xl-2 footer-item">
            <div class="site-links-footer">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item footer-link"><a href="<?php echo site_url('/chi-siamo'); ?>">Chi siamo</a></li>
                    <li class="nav-item footer-link"><a href="<?php echo site_url('/offerta-formativa'); ?>">Offerta formativa</a></li>
                    <li class="nav-item footer-link"><a href="<?php echo site_url('/contatti'); ?>">Contattaci</a></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 col-xl-2 footer-item">
            <div class="legal-links-footer">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item footer-link"><a href="<?php echo site_url('/termini-e-condizioni'); ?>">Termini e condizioni</a></li>
                    <li class="nav-item footer-link"><a href="<?php echo site_url('/cookie-policy'); ?>">Cookie policy</a></li>
                    <li class="nav-item footer-link">
                        <a href="" class="footer-social"><i class="fab fa-linkedin-in"></i></a>
                        <a href="" class="footer-social"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3 footer-item">
            <div class="newsletter-footer">
                <h1 class="newsletter-footer__title">Rimani aggiornato!</h1>
                <p class="newsletter-footer__paragraph">Iscriviti alla Newsletter per non perderti tutte le novità</p>
                <form>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Nome e cognome">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" placeholder="Email">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Accetto i termini e condizioni</label>
                    </div>
                    <button type="submit" class="btn-iscriviti">Iscrivimi</button>
                </form>
            </div>
        </div>
        <div class="col-sm-6 col-xl-2 footer-item">
            <div class="logo-footer2">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ero-forestiero-logo.png" alt="">
            </div>
        </div>
    </div>
</footer>
<div class="copyright">Copyright 2020</div>

<?php wp_footer(); ?>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<script src="https://use.fontawesome.com/1585840bf5.js"></script>

<!-- JavaScript files -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/faq-form.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/header-menu-button.js"></script>
</body>
</html>

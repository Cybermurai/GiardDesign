<footer class="footer">
  <div class="container footer__grid">
    <div class="row g-0 d-flex justify-content-between align-items-center footer__info">
      <div class="col-lg-1 footer__logo">
        <a href="#!">
          <img src="<?php echo get_template_directory_uri() . '/assets/logo.svg'; ?>" alt="<?php echo get_bloginfo( 'title' ); ?>">
        </a>
      </div>
      <div class="col-lg-11 d-flex flex-column flex-md-row justify-content-lg-end justify-content-sm-between align-items-md-center footer__cta">
        <div class="col-xxl-6 d-flex justify-content-md-end">
          <span class="footer__cta-text">Daj znać, co możemy dla Ciebie zrobić!</span>
        </div>
        <div class="col-xxl-3 d-flex justify-content-md-end">
          <a href="#!" class="btn btn--primary">
            Skontaktuj się z nami
          </a>
        </div>
      </div>
    </div>
    <div class="row g-0 footer__shortcuts d-flex">
      <div class="col-xxl-8">
        <?php
          wp_nav_menu( array(
            'menu' => 'Footer menu',
            'container'			=> "nav",
            'container_class'	=> "footer__nav-container",
            'menu_class'		=> "list list--clear list--inline footer__nav",
          ));
        ?>
      </div>
      <div class="col-xxl-4 d-flex justify-content-end footer__contact">
        <div class="col d-flex justify-content-end">
          <a class="link link--grey link--small" href="tel:000000000">000-000-000</a>
        </div>
        <div class="col d-flex justify-content-end">
          <a class="link link--grey link--small" href="mailto:giarddesign@kontakt.pl">giarddesign@kontakt.pl</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row g-0 d-flex footer__copyrights">
    <div class="col footer__rights">
        <span>Prawa zastrzeżone © 2022</span>
    </div>
    <div class="col d-flex justify-content-end footer__copy">
      <span>made by</span>
      <a href="https://adrespect.pl" target="_blank">
        <img src="<?php echo get_template_directory_uri() . '/assets/adRespect.svg'; ?>" alt="adRespect">
      </a>
    </div>

  </div>
</footer>
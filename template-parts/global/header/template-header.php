<header class="row g-0 header">
  <div class="container d-flex justify-content-bewteen align-items-center">
    <div class="header__logo col-lg-2">
      <img src="<?php echo get_template_directory_uri() . '/assets/logo.svg'; ?>" alt="<?php echo get_bloginfo( 'title' ); ?>">
    </div>
    <div class="header__nav col-lg-10 justify-content-end">
    <?php
      wp_nav_menu( array(
        'menu' => 'Main menu',
        'container'			=> "nav",
        'container_class'	=> "header__nav-container",
        'menu_class'		=> "list list--clear header__menu jsMenu",
      ) );
    ?>
    <div class="header__search jsSearch">
        <input class="jsSearchInput" type="text" placeholder="Czego szukasz?" />
        <button class="btn btn--search"></button>
    </div>
    </div>
  </div>
</header>




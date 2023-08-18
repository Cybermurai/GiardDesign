<header class="row g-0 header">
  <div class="header__logo col-lg-2">
    <img src="<?php echo get_template_directory_uri() . '/assets/logo.svg'; ?>" alt="><?php echo get_bloginfo( 'description' ); ?>">
  </div>
  <div class="header__nav col-lg-10">
  <?php
    wp_nav_menu( array(
	    'primary-menu' => 'Primary navigation',
      'container'			=> "nav",
      'container_class'	=> "header__nav-container",
      'menu_class'		=> "list list--clear header__menu jsMenu",
    ) );
  ?>
  <div class="header__search">
      <button class="btn btn--search"></button>
  </div>
  </div>
</header>




<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Coleren</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Quicksand:wght@300..700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet" />
  <?php wp_head(); ?>
</head>

<body>
  <header>
    <div class="HeaderContainer">
      <div class="HeaderBlock1">

        <?php the_custom_logo(); ?>
      </div>
      <div class="HeaderBlock2">
        <?php
        wp_nav_menu([
          'theme_location' => 'primary',
          'container'      => 'nav',
          'container_class' => 'primary-nav',
          'menu_class'     => 'menu',
        ]);
        ?>
      </div>
      <div class="HeaderBlock3">
        <img
          class="menu-icon"
          src="<?php echo get_template_directory_uri(); ?>/assets/icons/menu.svg"
          alt="Menu Icon" />
      </div>
    </div>
    <div class="dropdown-content">
      <div class="drop-logo">
        <?php the_custom_logo(); ?>
      </div>
      <?php
      wp_nav_menu([
        'theme_location' => 'primary',
        'container'      => 'nav',
        'container_class' => 'primary-nav',
        'menu_class'     => 'menu',
      ]);
      ?>
      <img
        class="close"
        src="<?php echo get_template_directory_uri(); ?>/assets/icons/close.svg"
        alt="Close Icon" />
    </div>
    </div>
  </header>
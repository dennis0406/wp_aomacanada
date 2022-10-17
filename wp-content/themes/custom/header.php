<!DOCTYPE html>
<html <?php language_attributes(); ?> <head>
<title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/app.css">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="header">
    <div class="container">
      <div class="header--top">
        <div class="header--top--left">
          <a class="logo" href="<?php echo get_home_url(); ?>"><img src="<?php echo bloginfo('template_directory') ?>/assets/logo.svg" alt="logo"></a>
          <div class="date"><?php echo date('l, jS \of F Y'); ?></div>
        </div>
        <div class="header--top--right">
          <div class="international">
            <a href="#newest">
              <ion-icon name="time-outline"></ion-icon> Newest
            </a>
            <a href="#newest"><img src="<?php echo bloginfo('template_directory') ?>/assets/icon-e.png" alt=""> International</a>
          </div>
          <div class="tools">
            <form action="" method="get" class="header__form__search">
              <input type="text" class="header__banner__search__field" name="s">
              <button class="header__banner__search__btn" type="submit">
                <ion-icon class="header__banner__search__icon" name="search-outline"></ion-icon>
              </button>
            </form>
            <a href="#login" class="login">
              <ion-icon name="person-outline"></ion-icon> Login
            </a>
          </div>
        </div>
      </div>
    </div>

  </header>
  <?php wp_nav_menu(array('header-menu' => 'header-menu')); ?>
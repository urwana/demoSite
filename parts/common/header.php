<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <?php
  $base = $args['base'];
  get_template_part("parts/common/head", null, array('base' => $base));
  wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header">
    <h1 class="logoWrapper">
      <a href="<?php echo home_url('/'); ?>">
        <picture>
          <source media="(max-width: 768px)" srcset="<?php echo esc_url(get_theme_file_uri("/images/logo-sp.png")); ?>" class="js-spLogo">
          <img src="<?php echo esc_url(get_theme_file_uri("/images/logo.png")); ?>" alt="ロゴ ExciteCode">
        </picture>
      </a>
    </h1>
    <nav class="js-navigation navigation">
      <?php get_template_part("parts/common/hamburgerButton"); ?>
      <ul class="navigation__lists">

        <?php
        $menu_name = 'global_nav';
        $location = get_nav_menu_locations();
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);

        foreach ($menu_items as $item) : ?>
          <li>
            <a class="nav-link" href="<?php esc_attr($item->url); ?> "><?php echo esc_html($item->title); ?></a>
          </li>
        <?php endforeach ?>


      </ul>
      <?php get_template_part("parts/common/snsIconContainer"); ?>
    </nav>
    <div class="circleBackground displaySp"></div>
  </header>
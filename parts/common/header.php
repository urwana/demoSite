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
          <source media="(max-width: 768px)" srcset="<?php echo esc_url(get_theme_file_uri("/images/logo-sp.png")); ?>"
            class="js-spLogo">
          <img src="<?php echo esc_url(get_theme_file_uri("/images/logo.png")); ?>" alt="ロゴ ExciteCode">
        </picture>
      </a>
    </h1>
    <nav class="js-navigation navigation">
      <?php get_template_part("parts/common/hamburgerButton"); ?>
      <ul class="navigation__lists">
        <li><a href="<?php echo home_url('/'); ?>">TOP</a></li>
        <li><a href="<?php echo get_page_link(11); ?>">ABOUT</a></li>
        <li><a href="<?php echo get_page_link(13); ?>">SERVICE</a></li>
        <li><a href="<?php echo get_post_type_archive_link('works'); ?>">WORKS</a></li>
        <li><a href="<?php echo get_page_link(16); ?>">NEWS</a></li>
        <li class="nav__contact"><a href="/contact.html">
            <a href="<?php echo get_page_link(2150); ?>">
              <i class="fa-regular fa-envelope size-custom displayPc"></i><span>CONTACT</span></a></li>
        <li class="displaySp"><a href="">プライバシーポリシー</a></li>
      </ul>
      <?php get_template_part("parts/common/snsIconContainer"); ?>
    </nav>
    <div class="circleBackground displaySp"></div>
  </header>
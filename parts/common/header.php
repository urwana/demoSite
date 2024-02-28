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
            class="js_spLogo">
          <img src="<?php echo esc_url(get_theme_file_uri("/images/logo.png")); ?>" alt="ロゴ ExciteCode">
        </picture>
      </a>
    </h1>
    <?php get_template_part("parts/common/hamburgerButton"); ?>
    <nav class="js_navigation navigation">
      <ul class="navigation__lists">
        <?php
        $menu_name = 'global_nav';
        $locations = get_nav_menu_locations();
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        $current_page_id = get_the_ID(); // 現在のページや投稿のIDを取得
        foreach ($menu_items as $item) : ?>
        <?php if ($item->object_id == "2150") : ?>
        <li class="nav__contact">
          <a href="<?php echo get_page_link(2150); ?>">
            <span><?php echo esc_html($item->title); ?></span>
          </a>
        </li>
        <?php else : ?>
        <li class="<?php echo ($item->object_id == get_queried_object_id()) ? 'currentMenuItem' : ''; ?>">
          <a href="<?php echo esc_attr($item->url); ?> "><?php echo esc_html($item->title); ?></a>
        </li>
        <?php endif; ?>
        <?php endforeach ?>
        <li class="displaySp"><a href="">プライバシーポリシー</a></li>
      </ul>
      <?php get_template_part("parts/common/snsIconContainer"); ?>
    </nav>
    <div class="js_circleBackground circleBackground displaySp"></div>
  </header>
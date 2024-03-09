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
  <header class="js_header header">
    <h1 class="js_logo logoWrapper">
      <a href="<?php echo home_url('/'); ?>">
        <picture>
          <source media="(max-width: 768px)" srcset="<?php echo esc_url(get_theme_file_uri("/images/logo.png")); ?>"
            class="js_spLogo">
          <img src="<?php echo esc_url(get_theme_file_uri("/images/logo.png")); ?>" alt="ロゴ Aventador">
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
        if ($menu_items) {
          foreach ($menu_items as $item) : ?>
        <?php if ($item->object_id == "2150") : ?>
        <li class="nav__contact">
          <a href="<?php echo get_page_link(2150); ?>">
            <span><?php echo esc_html($item->title); ?></span>
          </a>
        </li>
        <?php else : ?>
        <?php
              $nav_url_array = explode("/", rtrim($item->url, "/"));
              $nav_target_string = end($nav_url_array);
              $request_url_array = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
              $request_target_string = end($request_url_array); ?>
        <li class="<?php echo ($nav_target_string == $request_target_string) ? 'currentMenuItem' : ''; ?>">
          <a href="<?php echo esc_attr($item->url); ?> "><?php echo esc_html($item->title); ?></a>
        </li>
        <?php endif; ?>
        <?php endforeach;
        } else {
          echo '<li>メニューがありません</li>';
        } ?>
        <li class="displaySp"><a href="">プライバシーポリシー</a></li>
      </ul>
      <?php get_template_part("parts/common/snsIconContainer"); ?>
    </nav>
    <div class="js_circleBackground circleBackground displaySp"></div>
  </header>
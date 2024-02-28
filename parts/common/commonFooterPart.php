<div class="footer__lowerContents">
  <div class="footer__lowerContentsInner">
    <div class="leftContents">
      <div class="logoIconContainer">
        <div class="logoWrapper">
          <img src="<?php echo esc_url(get_theme_file_uri("/images/logo-footer.png")); ?>" alt="ロゴ ExciteCode" width="258" height="180">
        </div>
        <?php get_template_part('parts/common/snsIconContainer') ?>
      </div>
    </div>
    <nav class="footerNavigation">
      <?php
      $menu_name = 'footer_nav';
      $locations = get_nav_menu_locations();
      $menu = wp_get_nav_menu_object($locations[$menu_name]);
      $menu_items = wp_get_nav_menu_items($menu->term_id);
      ?>
      <ul class="footerNavigation__lists">
        <?php
        foreach ($menu_items as $item) : ?>
          <li>
            <a href="<?php echo esc_attr($item->url); ?> "><?php echo esc_html($item->title); ?></a>
          </li>
        <?php endforeach ?>
        <li class="displaySp"><a href="">プライバシーポリシー</a></li>
      </ul>
    </nav>
  </div>
  <small class="copyRight">&copy;<?php echo wp_date("Y"); ?>&nbsp;ExciteCode Automobile</small>
</div>
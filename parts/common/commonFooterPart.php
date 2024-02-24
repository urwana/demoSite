<div class="footer__lowerContents">
  <div class="footer__lowerContentsInner">
    <div class="leftContents">
      <div class="logoIconContainer">
        <div class="logoWrapper">
          <img src="<?php echo esc_url(get_theme_file_uri("/images/logo-footer.png")); ?>" alt="ロゴ ExciteCode"
            width="258" height="180">
        </div>
        <?php get_template_part('parts/common/snsIconContainer') ?>
      </div>
    </div>
    <nav class="footerNavigation">
      <ul class="footerNavigation__lists">
        <li><a href="<?php echo home_url('/'); ?>">TOP</a></li>
        <li><a href="<?php echo get_page_link(11); ?>">ABOUT</a></li>
        <li><a href="<?php echo get_page_link(13); ?>">SERVICE</a></li>
        <li><a href="<?php echo get_post_type_archive_link('works'); ?>">WORKS</a></li>
        <li><a href="<?php echo get_page_link(16); ?>">NEWS</a></li>
        <li><a href="<?php echo get_page_link(2150); ?>">CONTACT</a></li>
        <li><a href="">プライバシーポリシー</a></li>
      </ul>
    </nav>
  </div>
  <small class="copyRight">&copy;<?php echo wp_date("Y"); ?>&nbsp;ExciteCode Automobile</small>
</div>
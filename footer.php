  <footer class="footer">
    <div class="footer__upperContents">
      <div class="textContainer">
        <p class="textContainer__lead">輸入車の購入や修理のご相談など<br>お気軽にお問い合わせください。</p>
        <div class="contactMethod"><a href="<?php echo get_page_link(2150); ?>">
            <i class="fa-regular fa-envelope size-custom"></i>
            <span class="contactMethod__text">お問い合わせ</span></a>
        </div>
        <div class="contactMethod"><a href="tel:+0000000000">
            <i class="fa-regular fa-phone size-custom"></i>
            <span class="contactMethod__text">0000-000-000</span></a>
        </div>
        <p class="officeHours">受付時間 : 火曜日を除く 10：00〜18：00</p>
      </div>
      <div class="imgWrapper">
        <img src="<?php echo esc_url(get_theme_file_uri("/images/footer-image.png")); ?>" alt="footer イメージ画像 車">
      </div>
    </div>
    <?php get_template_part("parts/common/commonFooterPart"); ?>
  </footer>
  <?php wp_footer(); ?>
  </body>

  </html>
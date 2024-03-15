<section class="aboutSection">
  <div class="aboutSection__imgWrapper">
    <picture>
      <source media="(max-width: 768px)"
        srcset="<?php echo esc_url(get_theme_file_uri("/images/top/aboutSection-sp.jpg")); ?>" width="335" height="292">
      <source media="(min-width: 769px)"
        srcset="<?php echo esc_url(get_theme_file_uri("/images/top/aboutSection.jpg")); ?>" width="550" height="367">
      <img src="<?php echo esc_url(get_theme_file_uri("/images/top/aboutSection.jpg")); ?>" alt="About Us イメージ画像"
        width="550" height="367">
    </picture>
  </div>
  <div class="aboutSection__textContainer">
    <h2 class="aboutSection__title">私たち<span>About us</span></h2>
    <div class="aboutSection__text">
      相続、不動産売買、遺言に関することや、官公署への行政手続き等で何かお困りごとがございましたら、お気軽にご相談下さい。<br>各分野に精通した弁護士が、クライアントの皆様の権利の実現、ビジネスの円滑な遂行、紛争の解決のために、全力を尽くして参ります。<br>合理的で適切な解決を得る為に、高度なリーガルサービスを必要とされている方は、是非当事務所にご相談ください。
    </div>
    <div class="aboutSection__readMore">
      <?php
      $link = '/about';
      get_template_part('parts/common/readMoreLink', null, array('link' => $link)) ?>
    </div>
  </div>
</section>
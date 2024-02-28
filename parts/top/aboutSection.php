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
      相続、不動産売買、遺言に関することや、官公署への行政手続き等で何かお困りごとがございましたら、お気軽にご相談下さい。また豊富な公務員経験を活かし、公務員の採用試験や現職公</div>
    <div class="aboutSection__readMore">
      <?php
      $link = "./about.html";
      get_template_part('parts/common/readMoreLink', null, array('link' => $link)) ?>
    </div>
  </div>
</section>
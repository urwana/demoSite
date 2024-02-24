<section class="aboutSection">
  <div class="aboutSection__imgWrapper">
    <picture>
      <source media="(max-width: 768px)"
        srcset="<?php echo esc_url(get_theme_file_uri("/images/top/aboutSection-sp.jpg")); ?>" width="335" height="292">
      <source media="(min-width: 769px)"
        srcset="<?php echo esc_url(get_theme_file_uri("/images/top/aboutSection.jpg")); ?>" width="550" height="480">
      <img src="<?php echo esc_url(get_theme_file_uri("/images/top/aboutSection.jpg")); ?>" alt="About Us イメージ画像"
        width="550" height="480">
    </picture>
  </div>
  <div class="aboutSection__textContainer">
    <h2 class="aboutSection__title">About us</h2>
    <div class="aboutSection__text">弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。
      これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。</div>
    <div class="aboutSection__readMore">
      <?php
      $link = "./about.html";
      get_template_part('parts/common/readMoreLink', null, array('link' => $link)) ?>
    </div>
  </div>
</section>
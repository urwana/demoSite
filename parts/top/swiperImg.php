<div class="js_kv swiperContainer">
  <div class="swiper">
    <div class="swiper-wrapper">
      <?php
      $topSlides = $args['topSlides'];
      for ($i = 0; $i < $topSlides['number']; $i++) {
        $currentSlide = $i + 1;
      ?>
      <div class="swiper-slide topSlide">
        <picture>
          <source media="(max-width: 768px)"
            srcset="<?php echo esc_url(get_theme_file_uri("/images/top/topSwiper/" . $currentSlide . "-sp.jpg")); ?>"
            width="355" height="480">
          <source media="(min-width: 769px)"
            srcset="<?php echo esc_url(get_theme_file_uri("/images/top/topSwiper/" . $currentSlide . ".jpg")); ?>"
            width="1034" height="780">
          <img src="<?php echo esc_url(get_theme_file_uri("/images/top/topSwiper/" . $currentSlide . ".jpg")); ?>"
            alt="top swiper イメージ <?php echo $i; ?>" width="1034" height="780">
        </picture>
      </div>
      <?php } ?>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-scrollbar"></div>
  </div>
</div>
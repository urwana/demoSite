<div class="swiperContainer">
  <div class="swiper">
    <div class="swiper-wrapper">
      <?php for ($i = 1; $i < count($topSlides) + 1; $i++) {
        $slideClass = "topSlide-" + $i;
      ?>
      <div class="swiper-slide topSlide <?php $slideClass ?>"></div>
      <?php } ?>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-scrollbar"></div>
  </div>
</div>
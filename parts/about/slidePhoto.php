<?php $slidePhotoData = [
  "/images/about/aboutSlide/1",
  "/images/about/aboutSlide/2",
  "/images/about/aboutSlide/3",
  "/images/about/aboutSlide/4",
  "/images/about/aboutSlide/5",
  "/images/about/aboutSlide/6",
];
?>
<div class="slidePhoto">
  <ul class="js_slidePhoto__lists slidePhoto__lists">
    <?php foreach ($slidePhotoData as $index => $element) { ?>
      <li class="slidePhoto__list">
        <picture>
          <source media="(max-width: 768px)" srcset="<?php echo esc_url(get_theme_file_uri($element . "-sp.jpg")); ?>" width="180" height="150">
          <source media="(min-width: 769px)" srcset="<?php echo esc_url(get_theme_file_uri($element . ".jpg")); ?>" width="480" height="400">
          <img src="<?php echo esc_url(get_theme_file_uri($element . ".jpg")); ?>" alt="サービスのイメージ" width="480" height="400">
        </picture>
      </li>
    <?php }; ?>
  </ul>
</div>
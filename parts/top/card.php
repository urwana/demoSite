<?php $element = $args['element'];
?>
<div class="card">
  <div class="card__image">
    <div class="imgWrapper-card">
      <picture>
        <source media="(min-width: 768px)" srcset="<?php echo esc_url(get_theme_file_uri($element['serviceImg'])); ?>.jpg" width="335" height="170">
        <source media="(max-width: 767px)" srcset="<?php echo esc_url(get_theme_file_uri($element['serviceImg'])); ?>.jpg" width="335" height="170">
        <source media="(max-width: 767px) and (-webkit-min-device-pixel-ratio: 3), (max-width: 767px) and (min-resolution: 384dpi)" srcset="<?php echo esc_url(get_theme_file_uri($element['serviceImg'])); ?>-sp@3x.jpg" width="335" height="170">
        <img src="<?php echo esc_url(get_theme_file_uri($element['serviceImg'])); ?>.jpg" alt="サービスイメージ" width="335" height="170">
      </picture>
      <div class="pictureText">
        <div class="serviceNumber"><?php echo $element['serviceNumber']; ?></div>
        <div class="serviceName"><?php echo $element['serviceName']; ?></div>
      </div>
    </div>
  </div>
  <div class="card__body">
    <p class="card__text">
      <?php echo $element['serviceText']; ?>
    </p>
    <?php
    $link = $element['serviceLink'];
    get_template_part('parts/common/readMoreButton', null, array("link" => $link)) ?>
  </div>
</div>
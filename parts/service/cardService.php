<?php $cardServiceData = $args['cardServiceData']; ?>
<div class="cardService">
  <?php foreach ($cardServiceData as $index => $card) { ?>

  <section class="cardService__item" id="<?php echo $card['anchorLink']; ?>">
    <div class="cardService__upperContents">
      <div class="cardService__header">
        <div class="cardService__no"><?php echo $card['serviceNumber']; ?><span class="decoratedLine"></span>
        </div>
        <h2 class="cardService__title"><?php echo $card['serviceTitle']; ?></h2>
        <div class="cardService__summary"><?php echo $card['serviceSummary']; ?></div>
      </div>
      <div class="cardService__imgWrapper">
        <picture>
          <source media="(max-width: 768px)"
            srcset="<?php echo esc_url(get_theme_file_uri($card['serviceImg'] . "-sp.jpg")); ?>" width="335"
            height="223">
          <source media="(min-width: 769px)"
            srcset="<?php echo esc_url(get_theme_file_uri($card['serviceImg'] . ".jpg")); ?>" width="760" height="500">
          <img src="<?php echo esc_url(get_theme_file_uri($card['serviceImg'] . ".jpg")); ?>" alt="サービスのイメージ"
            width="760" height="500">
        </picture>
      </div>
    </div>
    <div class="cardService__lowerContents">
      <div class="cardService__titleSub">FEATURE<span>特徴</span></div>
      <p class="cardService__featureText"><?php echo $card['featureText']; ?></p>
    </div>
  </section>
  <?php }; ?>
</div>
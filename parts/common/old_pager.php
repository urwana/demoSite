<?php $dummyData = [[], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], []]; ?>
<div class="pager">
  <ul class="pages">
    <li><img src="<?php echo esc_url(get_theme_file_uri("/images/arrow-before.svg")); ?>" alt="前へ矢印"></li>
    <?php $displayNumber = 6;
    $pagerNumber = ceil(count($dummyData) / $displayNumber);
    for ($i = 1; $i < $pagerNumber; $i++) { ?>
    <li class="page <?php $i === 1 ? "current" : "" ?>"><?php $i ?></li>
    <?php } ?>
    <li><img src="<?php echo esc_url(get_theme_file_uri("/images/arrow-next.svg")); ?>" alt="次へ矢印"></li>
  </ul>
</div>
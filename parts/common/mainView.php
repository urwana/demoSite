<?php $mainViewData = $args['mainViewData']; ?>
<div class="mainView-<?php echo $mainViewData['pageNames'][0] ?>">
  <div class="mainView__titleContainer">
    <h2 class="mainView__title"><?php echo $mainViewData['pageNameEn']; ?></h2>
    <div class="mainView__subtitle"><?php echo $mainViewData['pageNameJp'] ?></div>
  </div>
</div>
<div class="breadCrumbsContainer-mainView">
  <?php // $pageNames = $mainViewData['pageNames'];
  // get_template_part('_breadCrumb', null, array('pageNames' => $pageNames)) 
  ?>

  <?php if (function_exists('bcn_display')) { ?>
  <div class="breadcrumb breadCrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
    <?php bcn_display(); ?>
  </div>
  <?php } ?>
</div>
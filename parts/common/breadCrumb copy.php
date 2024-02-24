<?php $pageNames = $args['pageNames']; ?>
<ul class="breadCrumbs">
  <li class="breadCrumb"><a href="./top.html">Top</a></li>
  <?php foreach ($pageNames as $index => $pageName) { ?>
  <?php if ($index === count($pageNames) - 1) { ?>
  <li class="breadCrumb current"><?php $pageName ?></li>
  <?php } else { ?>
  <li class="breadCrumb"><a href="./<?php $pageName ?>.html"><?php $pageName ?></a></li>
  <?php } ?>
  <?php ?>
  <?php }; ?>
</ul>
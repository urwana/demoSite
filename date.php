<?php $baseWork = ['path' => "./", 'title' => "実績", 'css' => "works", 'description' => "架空のコーポレートデモサイトの実績紹介ページです。"];
get_template_part('parts/common/header', null, array('base' => $baseWork)); ?>
<main>
  <div class="wrapper">
    <?php
    $mainViewData = [
      'pageNameEn' => "Date",
      'pageNameJp' => "日付別",
      'pageNames' => ["works"]
    ];
    get_template_part('parts/common/mainView', null, array('mainViewData' => $mainViewData));
    ?>
    <div class="worksMainContents">
      <div class="worksMainContents__tabs">
        <?php $workLinkTabData = [
          [
            'actions' => "e",
            'labels' => "すべての実績"
          ],
          [
            'actions' => "f",
            'labels' => "購入サポート"
          ],
          [
            'actions' => "g",
            'labels' => "修理・整備"
          ],
          [
            'actions' => "h",
            'labels' => "車検・点検"
          ],
        ]
        ?>
        <?php get_template_part('parts/common/linkTabs', null, array('workLinkTabData' => $workLinkTabData)); ?>
      </div>
      <div class="worksMainContents__body">
        <?php if (have_posts()) : ?>
        <ul class="works__lists">
          <?php while (have_posts()) : the_post();
            $index = 0;
            $photoNumber = $index + 1;
          ?>
          <?php get_template_part('parts/works/worksLists'); ?>

          <?php $index++; ?>
          <?php endwhile; ?>
        </ul>
        <?php else : ?>
        <p>記事が投稿されていません</p>
        <?php endif; ?>
        <?php get_template_part('parts/common/pager') ?>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
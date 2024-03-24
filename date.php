<?php $baseWork = ['title' => "月別一覧", 'description' => "Aventador 法律事務所の月別一覧ページです。"];
get_template_part('parts/common/header', null, array('base' => $baseWork)); ?>
<main>
  <div class="wrapper">
    <?php
    $mainViewData = [
      'pageNameEn' => "日付別",
      'pageNameJp' => "Date",
      'pageNames' => ["works"]
    ];
    get_template_part('parts/common/mainView', null, array('mainViewData' => $mainViewData));
    ?>
    <div class="worksMainContents">
      <div class="worksMainContents__tabs">
        <?php get_template_part('parts/common/linkTabsDate'); ?>
      </div>
      <div class="worksMainContents__body">
        <?php if (have_posts()) : ?>
        <ul class="works__lists">
          <?php while (have_posts()) : the_post();
              $index = 0;
              $photoNumber = $index + 1;
            ?>
          <?php get_template_part('parts/works/worksLists', null, ["long" => false]); ?>
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
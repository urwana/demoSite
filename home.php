<?php $baseNews = ['title' => "お知らせ", 'description' => "Aventador 法律事務所のお知らせ一覧ページです。"];
get_template_part('parts/common/header', null, array('base' => $baseNews)); ?>
<main>
  <div class="wrapper">
    <?php
    $mainViewData = [
      'pageNameEn' => "お知らせ",
      'pageNameJp' => "News",
      'pageNames' => ["news"]
    ];
    get_template_part('parts/common/mainView', null, array('mainViewData' => $mainViewData)); ?>
    <div class="newsMainContents">
      <div class="newsMainContents__tabs">
        <?php get_template_part('parts/common/linkTabs', null, array('types' => 'news')); ?>
      </div>
      <div class="newsMainContents__body">
        <?php if (have_posts()) : ?>
          <ul class="news__lists">
            <?php while (have_posts()) : the_post();
              $index = 0;
              $photoNumber = $index + 1;
            ?>
              <?php get_template_part('parts/common/newsLists', null, array('labelDark' => true)); ?>
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
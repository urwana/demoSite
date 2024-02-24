<?php $baseNews = ['path' => "./", 'title' => "お知らせ", 'css' => "news", 'description' => "架空のコーポレートデモサイトのお知らせ一覧ページです。"];
get_template_part('parts/common/header', null, array('base' => $baseNews)); ?>
<main>
  <div class="wrapper">
    <?php
    $mainViewData = [
      'pageNameEn' => "News",
      'pageNameJp' => "お知らせ",
      'pageNames' => ["news"]
    ];
    get_template_part('parts/common/mainView', null, array('mainViewData' => $mainViewData)); ?>
    <div class="newsMainContents">
      <div class="newsMainContents__tabs">
        <?php get_template_part('parts/common/linkTabs'); ?>
      </div>
      <div class="newsMainContents__body">
        <?php if (have_posts()) : ?>
        <ul class="news__lists">
          <?php while (have_posts()) : the_post();
              $index = 0;
              $photoNumber = $index + 1;
            ?>
          <?php get_template_part('parts/common/newsLists'); ?>
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
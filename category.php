<?php $baseWork = ['path' => "./", 'title' => "カテゴリー", 'description' => "架空のコーポレートデモサイトのカテゴリーページです。"];
get_template_part('parts/common/header', null, array('base' => $baseWork)); ?>
<main>
  <div class="wrapper">
    <?php
    $categorie = $request_url_array = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
    $request_target_string = end($request_url_array);
    $displayCategory = 'お知らせ - ' . urldecode($request_target_string);
    $mainViewData = [
      'pageNameEn' => $displayCategory,
      'pageNameJp' => "News List",
      'pageNames' => ["news"]
    ];
    get_template_part('parts/common/mainView', null, array('mainViewData' => $mainViewData));
    ?>
    <div class="newsMainContents">
      <div class="newsMainContents__tabs">
        <?php get_template_part('parts/common/linkTabsCategory'); ?>
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
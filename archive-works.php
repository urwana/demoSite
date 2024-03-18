<?php $baseWork = ['path' => "./", 'title' => "実績", 'css' => "works", 'description' => "架空のコーポレートデモサイトの実績紹介ページです。"];
get_template_part('parts/common/header', null, array('base' => $baseWork)); ?>
<main>
  <div class="wrapper">
    <?php
    $mainViewData = [
      'pageNameEn' => "ご相談事例",
      'pageNameJp' => "Works",
      'pageNames' => ["works"]
    ];
    get_template_part('parts/common/mainView', null, array('mainViewData' => $mainViewData)); ?>
    <div class="worksMainContents">
      <div class="worksMainContents__tabs">
        <?php get_template_part('parts/common/linkTabsTaxonomy', null, array('types' => 'works')); ?>
      </div>
      <?php
      $args = array(
        "post_type" => "works"
      );
      $the_query = new WP_Query($args);
      ?>
      <div class="worksMainContents__body">
        <?php if (have_posts()) : ?>
        <ul class="works__lists">
          <?php while ($the_query->have_posts()) : $the_query->the_post();
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
<?php $baseWork = ['path' => "./", 'title' => "タクソノミー", 'css' => "works", 'description' => "架空のコーポレートデモサイトの実績紹介ページです。"];
get_template_part('parts/common/header', null, array('base' => $baseWork)); ?>
<main>
  <div class="wrapper">
    <?php
    $mainViewData = [
      'pageNameEn' => "Taxonomy",
      'pageNameJp' => "タクソノミー別一覧",
      'pageNames' => ["works"]
    ];
    get_template_part('parts/common/mainView', null, array('mainViewData' => $mainViewData)); ?>
    <div class="worksMainContents">
      <div class="worksMainContents__tabs">
        <?php get_template_part('parts/common/linkTabsTaxonomy'); ?>
      </div>
      <div class="worksMainContents__body">
        <?php
        $genre_slug = get_query_var('genre');
        $args = array(
          "post_type" => "works",
          'tax_query' => array(
            array(
              'taxonomy' => 'genre',
              'field'    => 'slug',
              'terms'    => $genre_slug,
            ),
          ),
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
        <ul class="works__lists">
          <?php while ($the_query->have_posts()) : $the_query->the_post();
              $index = 0;
              $photoNumber = $index + 1;
            ?>
          <?php get_template_part('parts/works/worksLists', null, array('type' => 'taxonomy')); ?>
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
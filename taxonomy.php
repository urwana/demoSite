<?php $baseWork = ['path' => "./", 'title' => "実績", 'css' => "works", 'description' => "架空のコーポレートデモサイトの実績紹介ページです。"];
get_template_part('parts/common/header', null, array('base' => $baseWork)); ?>
<main>
  <div class="wrapper">
    <?php
    $taxonomy = $request_url_array = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
    $request_target_string = end($request_url_array);

    $title = urldecode($request_target_string);
    $caseName = "";

    function returnLawName($title)
    {
      switch ($title) {
        case "commercial-law":
          return "商法";
          break;
        case "corporate-law":
          return "会社法";
          break;
        case "labor-law":
          return "労働法";
          break;
        case "civil-code":
          return  "民法";
          break;
        case "international-laws":
          return "国際法";
          break;
        case "antitrust-law":
          return   "独禁法";
          break;
        case "finance-law":
          return   "金融法";
          break;
        case "real-estate-law":
          return   "不動産法";
          break;
        case "environmental-law":
          return   "環境法";
          break;
        default:
          return "その他";
          break;
      }
    }



    $displayTaxonomy = '事例 - ' . returnLawName(urldecode($request_target_string));
    $mainViewData = [
      'pageNameEn' => $displayTaxonomy,
      'pageNameJp' => "Case List",
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
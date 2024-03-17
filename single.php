<?php $baseNewsDetail = [' path' => "./", 'title' => "お知らせ", 'css' => "newsDetail", 'description' => "架空のコーポレートデモサイトのお知らせ詳細ページです。"];
get_template_part('parts/common/header', null, array('base' => $baseNewsDetail)); ?>
<main>
  <div class="wrapper">
    <div class="breadCrumbContainer">
    </div>
    <div class="newsDetail">
      <div class="newsDetail__main">
        <div class="newsDetail__head">
          <div class="newsDetail__labels">
            <?php
            // $current_category_id = get_queried_object_id();
            $categories = get_categories(array(
              'orderby' => 'name',
              'order'   => 'ASC',
              // 表示するカテゴリーの数を指定
              'number'  => 5
            )); ?>
            <?php foreach ($categories as $category) {
              echo '<span class="newsDetail__label">' . esc_html($category->name) . '</span>';
            } ?>
          </div>
          <div class="newsDetail__title"><?php the_title(); ?></div>
          <time class="newsDetail__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y年n月j日'); ?>
          </time>
        </div>
        <div class="newsDetail__imgContainer">
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('full', array('class' => 'detail__thumbnail')); ?>
          <?php else : ?>
            <img class="detail__thumbnail" src="<?php echo esc_url(get_theme_file_uri("/images/articleNone.jpg")); ?>" alt="NoImage画像" />
          <?php endif; ?>
        </div>
        <?php the_content(); ?>
        <div class="newsDetail__buttonContainer">
          <?php
          $prev_link = get_previous_post_link('%link', '前の記事へ');
          echo str_replace('<a href=', '<a class="newsDetail__button-before" href=', $prev_link);
          $next_link = get_next_post_link('%link', '次の記事へ');
          echo str_replace('<a href=', '<a class="newsDetail__button-next" href=', $next_link);
          ?>
        </div>
      </div>
      <div class="newsDetail__sideBar">
        <?php get_template_part('parts/common/sideBar'); ?>
      </div>
    </div>
    <?php get_template_part('parts/common/footer'); ?>
  </div>
</main>
<?php get_footer(); ?>
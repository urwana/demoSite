<?php $baseWorkDetail = ['path' => "./", 'title' => "実績", 'description' => "架空のコーポレートデモサイトの実績紹介ページです。"];
get_template_part('parts/common/header', null, array('base' => $baseWorkDetail)); ?>
<main>
  <div class="wrapper">
    <div class="worksDetail">
      <div class="worksDetail__head">
        <div class="worksLabels">
          <?php
          // $current_category_id = get_queried_object_id();
          $categories = get_categories(array(
            'orderby' => 'name',
            'order'   => 'ASC',
            // 表示するカテゴリーの数を指定
            'number'  => 5
          )); ?>
          <?php foreach ($categories as $category) {
            echo '<span class="worksDetail__label">' . esc_html($category->name) . '</span>';
          } ?>
        </div>
        <h2 class="worksDetail__title"><?php the_title(); ?></h2>
        <time class="worksDetail__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y年n月j日'); ?>
        </time>
      </div>
      <div class="worksDetail__imgContainer">
        <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail('full', array('class' => 'detail__thumbnail')); ?>
        <?php else : ?>
          <img class="detail__thumbnail" src="<?php echo esc_url(get_theme_file_uri("/images/articleNone.jpg")); ?>" alt="NoImage画像" />
        <?php endif; ?>
      </div>

      <div class="worksDetail__text">
        <?php the_content(); ?>
      </div>

      <div class="worksDetail__buttonContainer">
        <a href="<?php echo get_post_type_archive_link('works'); ?>" class="worksDetail__button">ご相談事例一覧へ</a>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
<div class="linkTabs">
  <?php
  $current_category_id = get_queried_object_id();
  $categories = get_categories(array(
    'orderby' => 'name',
    'order'   => 'ASC',
    // 表示するカテゴリーの数を指定
    'number'  => 5
  ));

  // 通常投稿一覧ページへのURL
  $home_class = (is_home() || is_front_page()) ? 'is-active' : '';
  $home_link = sprintf(
    //通常投稿一覧ページへのaタグに付与するクラスを指定できる
    '<a class="linkTab %s" href="%s" alt="%s">全て</a>',
    $home_class,
    // 通常投稿一覧ページのスラッグを指定
    esc_url(home_url('/news')),
    esc_attr(__('View all posts', 'textdomain'))
  );
  echo sprintf(esc_html__('%s', 'textdomain'), $home_link);

  // カテゴリーのリンク
  if ($categories) {
    foreach ($categories as $category) {
      // カレントクラスに付与するクラスを指定できる
      $category_class = ($current_category_id === $category->term_id) ? 'is-active' : '';
      $category_link = sprintf(
        // 各カテゴリーに付与するクラスを指定できる
        '<a class="linkTab %s" href="%s" alt="%s">%s</a>',
        $category_class,
        esc_url(get_category_link($category->term_id)),
        esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $category->name)),
        esc_html($category->name)
      );
      echo sprintf(esc_html__('%s', 'textdomain'), $category_link);
    }
  }
  ?>
</div>
<div class="linkTabs">
  <?php
  $current_category_id = get_queried_object_id();
  $terms = get_categories(array(
    'taxonomy' => 'genre',
    'orderby' => 'name',
    'order'   => 'ASC',
    // 表示するカテゴリーの数を指定
    'number'  => 5
  ));

  // 通常投稿一覧ページへのURL
  $home_class = (is_post_type_archive()) ? 'is-active' : '';
  $home_link = sprintf(
    //カスタム投稿一覧ページへのaタグに付与するクラスを指定できる
    '<a class="linkTab %s" href="%s" alt="%s">全て</a>',
    $home_class,
    // カスタム投稿一覧ページのスラッグを指定
    esc_url(home_url('/works')),
    esc_attr(__('View all posts', 'textdomain'))
  );
  echo sprintf(esc_html__('%s', 'textdomain'), $home_link);

  // カテゴリーのリンク
  if ($terms) {
    foreach ($terms as $term) {
      // カレントクラスに付与するクラスを指定できる
      $term_class = ($current_category_id === $term->term_id) ? 'is-active' : '';
      $term_link = sprintf(
        // 各カテゴリーに付与するクラスを指定できる
        '<a class="linkTab %s" href="%s" alt="%s">%s</a>',
        $term_class,
        esc_url(get_category_link($term->term_id)),
        esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $term->name)),
        esc_html($term->name)
      );
      echo sprintf(esc_html__('%s', 'textdomain'), $term_link);
    }
  }
  ?>
</div>
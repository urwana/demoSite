<?php
$current_category_id = get_queried_object_id();
$terms = get_categories(array(
  'orderby' => 'name',
  'order'   => 'ASC',
  'number'  => 10
));
// 現在画面の flag
$is_current = (is_post_type_archive()) ? 'is-active' : '';
// placeHoler に値を入れてリンクを作成
$home_link = sprintf(
  '<a class="linkTab %s" href="%s" alt="%s">全て</a>',
  $is_current,
  // カスタム投稿一覧ページのスラッグを指定
  esc_url(home_url('/news')),
  // HTML属性内の値をエスケープする
  esc_attr(__('View all posts', 'textdomain'))
);
echo sprintf(esc_html__('%s', 'textdomain'), $home_link);

// 各カテゴリーのリンク
if ($terms) {
  foreach ($terms as $term) {
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
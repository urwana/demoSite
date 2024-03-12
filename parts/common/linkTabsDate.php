<?php
add_filter('get_archives_link', 'custom_archive_link', 10, 6);

function custom_archive_link($link_html, $url, $text, $format, $before, $after)
{
  $link = sprintf('<a class="linkTab" href="%s" alt="%s">%s</a>', esc_url($url), esc_attr($text), esc_html($text));
  return $before . $link . $after;
}

$args = array(
  'type' => 'monthly', // 月ごとのアーカイブを指定
  'limit' => 12, // 表示件数を指定
);
echo '<ul>';
echo wp_get_archives($args); // カスタマイズされたアーカイブリンクのHTMLを生成
echo '</ul>';

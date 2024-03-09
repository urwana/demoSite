<?php
$args = array(
    'mid_size' => 1,
    'prev_text' => '<img src="' . esc_url(get_theme_file_uri("/images/arrow-before.svg")) . '" alt="戻る矢印ボタン" class="pagination__arrow">',
    'next_text' => '<img src="' . esc_url(get_theme_file_uri("/images/arrow-next.svg")) . '" alt="進む矢印ボタン" class="pagination__arrow">',
);
the_posts_pagination($args);
?>
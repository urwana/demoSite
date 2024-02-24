<?php
$args = array(
    'mid_size' => 1,
    'prev_text' => '<img src="' . esc_url(get_theme_file_uri("/images/arrow-before.svg")) . '" alt="" class="pagination__arrow">',
    'next_text' => '<img src="' . esc_url(get_theme_file_uri("/images/arrow-next.svg")) . '" alt="" class="pagination__arrow">',
);
the_posts_pagination($args);
?>
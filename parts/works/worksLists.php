<?php $type = $args['type']; ?>
<li class="list-work">
  <a href="<?php the_permalink(); ?>">
    <div class="list-imgContainer-work">
      <?php if (has_post_thumbnail()) : ?>
      <?php the_post_thumbnail('full', array('class' => 'works__img')); ?>
      <?php else : ?>
      <img class="news__img" src="<?php echo esc_url(get_theme_file_uri("/images/articleNone.jpg")); ?>"
        alt="NoImage画像" />
      <?php endif; ?>
    </div>
    <div class="list-textContainer-work">
      <div class="list__upperContents">
        <ul class="labels-works">
          <?php
          if ($type == 'taxonomy') {
            $taxonomy_terms = get_the_terms($post->ID, 'genre');
            if (!empty($taxonomy_terms)) {
              $limit = 5;
              $count = 0;
              foreach ($taxonomy_terms as $taxonomy_term) {
                if ($count < $limit) {
                  echo '<span class="news__category">' . esc_html($taxonomy_term->name) . '</span>';
                  $count++;
                } else {
                  break;
                }
              }
            }
          } else {
            $categories = get_the_category();
            if (!empty($categories)) {
              $limit = 5; // 表示するカテゴリーの数を指定
              $count = 0;
              foreach ($categories as $category) {
                if ($count < $limit) {
                  echo '<li class="works__category">' . esc_html($category->name) . '</li>';
                  $count++;
                } else {
                  break;  // 制限に達したらループを抜ける
                }
              }
            }
          }
          ?>
        </ul>
      </div>
      <div class="list__text-work"><?php the_title(); ?></div>
      <time class="worksDate"
        datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
    </div>
  </a>
</li>
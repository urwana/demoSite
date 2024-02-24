<li class="list">
  <a href="<?php the_permalink(); ?>">
    <div class="list__upperContents">
      <time class="newsDate" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>

      <ul class="newsLabels">
        <?php
        $categories = get_the_category();
        if (!empty($categories)) {
          $limit = 5; // 表示するカテゴリーの数を指定
          $count = 0;
          foreach ($categories as $category) {
            if ($count < $limit) {
              echo '<li class="newsLabel">' . esc_html($category->name) . '</li>';
              $count++;
            } else {
              break;  // 制限に達したらループを抜ける
            }
          }
        }
        ?>
      </ul>
    </div>
    <div class="list__text"><?php the_title(); ?></div>
  </a>
</li>
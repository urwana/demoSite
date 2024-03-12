<li class="list-work">
  <a href="<?php the_permalink(); ?>">
    <div class="list-imgContainer-work">
      <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('full', array('class' => 'works__img')); ?>
      <?php else : ?>
        <img class="news__img" src="<?php echo esc_url(get_theme_file_uri("/images/articleNone.jpg")); ?>" alt="NoImage画像" />
      <?php endif; ?>
    </div>
    <div class="list-textContainer-work">
      <div class="list__upperContents">
        <ul class="Labels--works">
          <?php
          //if ($type == 'taxonomy') {
          $taxonomy_terms = get_the_terms(get_the_ID(), 'custom_taxonomy_work');
          if (!empty($taxonomy_terms)) {
            $limit = 5;
            $count = 0;
            foreach ($taxonomy_terms as $taxonomy_term) {
              if ($count < $limit) {
                echo '<span class="label--works">' . esc_html($taxonomy_term->name) . '</span>';
                $count++;
              } else {
                break;
              }
            }
          }
          ?>
        </ul>
      </div>
      <div class="list__title-work"><?php the_title(); ?></div>
      <?php the_excerpt(); ?>
      <time class="worksDate" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
    </div>
  </a>
</li>
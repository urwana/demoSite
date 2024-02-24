  <li class="photoList"><a href="<?php the_permalink(); ?>">
      <div class="photoList__imgContainer">
        <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('thumbnail', array('class' => 'detail__img')); ?>
        <?php else : ?>
        <img class="detail__thumbnail" src="<?php echo esc_url(get_theme_file_uri("/images/articleNone.jpg")); ?>"
          alt="NoImage画像" />
        <?php endif; ?>
      </div>
      <div class="photoList__textContainer">
        <div class="photoList__text"><?php the_title(); ?></div>
        <time class="photoList__date"
          datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y年n月j日'); ?></time>
      </div>
    </a></li>
<section class="newsSection">
  <div class="newsSection__head">
    <h2 class="newsSection__title">News</h2>
    <div class="newsSection__linkContainer">
      <?php
      get_template_part('parts/common/linktabs') ?>
    </div>
  </div>
  <div class="newsSection__body">


    <?php
    $args = array(
      "post_type" => "",
      "posts_per_page" => 4
    );
    $the_query = new WP_Query($args);
    ?>
    <?php if ($the_query->have_posts()) : ?>
      <ul class="news__items">
        <?php while ($the_query->have_posts()) : $the_query->the_post();
          get_template_part('parts/common/newslists');
        endwhile; ?>
        <?php wp_reset_postdata(); ?>
      </ul>
    <?php else : ?>
      <p>記事が投稿されていません</p>
    <?php endif; ?>

    <div class="newsSection__readMore">
      <?php
      $link =  "./news.html";
      get_template_part('parts/common/readMoreLink', null, array('link' => $link)) ?>
    </div>
  </div>
</section>
<section class="worksSection">
  <h2 class="js_worksSection__title worksSection__title">ご相談事例<span>Works</span></h2>
  <div class="js_workSection__body worksSection__body">
    <?php
    $args = array(
      "post_type" => "works",
      "posts_per_page" => 3
    );
    $the_query = new WP_Query($args);
    ?>
    <?php if ($the_query->have_posts()) : ?>
      <ul class="news__items">
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

          <?php get_template_part('parts/works/worksLists'); ?>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      </ul>
    <?php else : ?>
      <p>記事が投稿されていません</p>
    <?php endif; ?>
    <div class="worksSection__link">
      <?php
      $workLink = "./work.html";
      get_template_part('parts/common/readMoreLink', null, array('link' => $workLink));
      ?>
    </div>
  </div>
</section>
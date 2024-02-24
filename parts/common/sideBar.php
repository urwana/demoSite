<div class="sideBar">
  <section class="latestNews">
    <h2 class="title-sideBar">最新記事</h2>
    <?php
        $args = array(
            "post_type" => "post",
            "posts_per_page" => 3,
            "orderby" => "date",
            "order" => "DESC",        );
        $the_query = new WP_Query($args);
        ?>
    <?php if ($the_query->have_posts()) : ?>
    <ul class="detail__list">
      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

      <?php get_template_part('parts/common/photoLists'); ?>

      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    </ul>
    <?php else : ?>
    <p>記事が投稿されていません</p>
    <?php endif; ?>
  </section>
  <section class="archive">
    <h2 class="title-sideBar">アーカイブ</h2>
    <ul class="sideBarLists">
      <?php wp_get_archives('type=monthly&limit=12'); ?>
    </ul>
  </section>
  <section class="category">
    <h2 class="title-sideBar">カテゴリー</h2>

    <ul class="sideBarLists">
      <?php
    $categories = get_categories();
    foreach ($categories as $category) {
        echo '<li class="detail__item"><a class="detail__link" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
    }
    ?>
  </section>
</div>
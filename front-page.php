<?php $base = ['title' => "トップ", 'description' => "Aventador 法律事務所のトップページです。"]; ?>
<?php get_template_part('parts/common/header', null, array('base' => $base)); ?>

<main>
  <div class="wrapper">
    <?php get_template_part("parts/top/mainViewSwiper"); ?>
    <div class="contents">
      <?php get_template_part("parts/top/aboutSection"); ?>
      <?php get_template_part("parts/top/serviceSection") ?>
      <?php get_template_part("parts/top/worksSection"); ?>
    </div>
    <div class="contents-dark">
      <div class="contents__inner-dark">
        <?php get_template_part("parts/top/newsSection"); ?>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
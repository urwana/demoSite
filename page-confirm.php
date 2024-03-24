<?php $base = ['title' => "お問い合わせ確認", 'description' => "Aventador 法律事務所のお問い合わせ確認ページです。"]; ?>
<?php get_template_part('parts/common/header', null, array('base' => $base)); ?>

<main>
  <div class="wrapper">
    <?php $mainViewData = [
      'pageNameEn' => "お問合せ - 確認",
      'pageNameJp' => "Confirm",
      'pageNames' => ["contact", "confirm"]
    ];
    get_template_part('parts/common/mainView', null, array('mainViewData' => $mainViewData)); ?>
    <?php echo do_shortcode('[contact-form-7 id="d7edb26" title="問い合わせ確認"]'); ?>
    <?php get_template_part('parts/common/footerSimple'); ?>
  </div>
</main>
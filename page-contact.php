<?php $base = ['title' => "お問い合わせ", 'description' => "Aventador 法律事務所のお問い合わせ入力ページです。"]; ?>
<?php get_template_part('parts/common/header', null, array('base' => $base)); ?>

<main>
  <div class="wrapper">
    <?php $mainViewData = [
      'pageNameEn' => "お問合せ",
      'pageNameJp' => "Contact",
      'pageNames' => ["contact"]
    ];
    get_template_part('parts/common/mainView', null, array('mainViewData' => $mainViewData)); ?>
    <?php echo do_shortcode('[contact-form-7 id="4fae6e6" title="contact"]'); ?>
    <?php get_template_part('parts/common/footerSimple'); ?>
  </div>
</main>
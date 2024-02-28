<?php $base = ['path' => "./", 'title' => "お問い合わせ", 'css' => "contact", 'description' => "架空のコーポレートデモサイトのお問い合わせ入力ページです。"]; ?>
<?php get_template_part('parts/common/header', null, array('base' => $base)); ?>

<main>
  <div class="wrapper">
    <?php $mainViewData = [
      'pageNameEn' => "Contact",
      'pageNameJp' => "お問合せ",
      'pageNames' => ["contact"]
    ];
    get_template_part('parts/common/mainView', null, array('mainViewData' => $mainViewData)); ?>
    <div class="contact">
      <?php echo do_shortcode('[contact-form-7 id="4fae6e6" title="contact"]'); ?> </div>
    <?php get_template_part('parts/common/footerSimple'); ?>
  </div>
</main>
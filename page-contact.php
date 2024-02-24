<?php $base = ['path' => "./", 'title' => "お問い合わせ", 'css' => "contact", ' description' => "架空のコーポレートデモサイトのお問い合わせ入力ページです。"]; ?>
<!DOCTYPE html>
<html lang="ja">
<?php get_template_part("./parts/common/head", $base) ?>

<body>
  <div class="wrapper">
    <?php get_template_part('parts/common/header');
    $mainViewData = [
      'pageNameEn' => "Contact",
      'pageNameJp' => "お問合せ",
      'pageNames' => ["contact"]
    ];
    get_template_part('parts/common/mainView', $mainViewData); ?>
    <div class="contact">
      <?php echo do_shortcode('[contact-form-7 id="4fae6e6" title="contact"]'); ?> </div>
    <?php get_template_part('parts/common/footerSimple'); ?>
  </div>
</body>

</html>
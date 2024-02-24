<?php $base = ['path' => "./", 'title' => "お問い合わせ確認", 'css' => "contact", 'description' => "架空のコーポレートデモサイトのお問い合わせ確認ページです。"]; ?>
<!DOCTYPE html>
<html lang="ja">
<?php get_template_part("./parts/common/head", $base) ?>

<body>
  <div class="wrapper">
    <?php get_template_part('parts/common/header');
    $mainViewData = [
      'pageNameEn' => "Contact",
      'pageNameJp' => "お問合せ",
      'pageNames' => ["contact", "confirm"]
    ];
    get_template_part('parts/common/mainView', $mainViewData); ?>
    <?php echo do_shortcode('[contact-form-7 id="d7edb26" title="問い合わせ確認"]'); ?>
    <?php get_template_part('parts/common/footerSimple'); ?>
  </div>
</body>

</html>
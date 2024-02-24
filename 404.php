<?php $base = ['path' => "./", 'title' => "ページが見つかりませんでした", 'css' => "page404", 'description' => ""]; ?>
<!DOCTYPE html>
<html lang="ja">

<?php get_template_part("./parts/common/head", $base); ?>

<body>
  <div class="wrapper">
    <?php get_template_part('parts/common/header'); ?>
    <div class="page404">
      <div class="mainView-404">
        <h2 class="mainView__title-404">404 Not Found</h2>
        <div class="displayPc">
          <div class="mainView__subtitle-404">お探しのページはURLが誤っているか、削除された可能性があります。<br>
            3秒後にTOPページに遷移します</div>
          <div class="mainView__buttonContainer-404">
            <a href="" class="">TOPへ戻る</a>
          </div>
        </div>
      </div>
    </div>
    <div class="spTextContainer-404 displaySp">
      <div class="mainView__subtitle-404">お探しのページはURLが誤っているか、削除された可能性があります。<br>
        3秒後にTOPページに遷移します</div>
      <div class="mainView__buttonContainer-404">
        <a href="./top.html" class="button__404">TOPへ戻る</a>
      </div>
    </div>
    <?php get_template_part('parts/common/footer') ?>
  </div>
</body>

</html>
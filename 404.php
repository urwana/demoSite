<?php $base = ['path' => "./", 'title' => "ページが見つかりませんでした", 'css' => "page404", 'description' => ""]; ?>
<?php get_template_part('parts/common/header', null, array('base' => $base)); ?>

<main>
  <div class="wrapper">
    <div class="page404">
      <div class="mainView-404">
        <div class="contentsWrapper--404">
          <h2 class="mainView__title-404">404 <br class="displaySp">Not Found</h2>
          <div class="displayPc mainView__subtitle-404">お探しのページはURLが誤っているか、削除された可能性があります。<br>
            3秒後にTOPページに遷移します</div>
          <div class="displayPc mainView__buttonContainer-404">
            <a href="<?php echo home_url('/'); ?>" class="button__404">TOPへ戻る</a>
          </div>
        </div>
      </div>
    </div>
    <div class="spTextContainer-404 displaySp">
      <div class="mainView__subtitle-404">お探しのページはURLが誤っているか、削除された可能性があります。<br>
        3秒後にTOPページに遷移します</div>
      <div class="mainView__buttonContainer-404">
        <a href="<?php echo home_url('/'); ?>" class="button__404">TOPへ戻る</a>
      </div>
    </div>
    <?php get_template_part('parts/common/footer') ?>
  </div>
</main>
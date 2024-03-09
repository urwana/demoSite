<?php $base = ['path' => "./", 'title' => "お問い合わせ完了", 'css' => "contact", 'description' => "架空のコーポレートデモサイトのお問い合わせ完了ページです。"]; ?>
<?php get_template_part('parts/common/header', null, array('base' => $base)); ?>

<main>
  <div class="wrapper">
    <?php $mainViewData = [
      'pageNameEn' => "お問い合わせ",
      'pageNameJp' => "Contact",
      'pageNames' => ["contact"]
    ];
    get_template_part('parts/common/mainView', null, array('mainViewData' => $mainViewData)); ?>
    <div class="contact">
      <div class="contact__inner">
        <div class="contactForm">
          <p class="contact__thankEn">THANK YOU FOR CONTACTING US.</p>
          <p class="contact__thankJp">お問い合わせありがとうございます。</p>
          <div class="contact__explanation">近日中に折り返しご連絡いたします。<br>
            今しばらくお待ちくださいますよう、よろしくお願い申し上げます。<br>
            万が一、ご回答メールが届かない場合は、送信トラブル等の可能性もありますので、大変お手数ではございますが、もう一度フォームよりお問い合わせいただくか、お電話にてお問い合わせをお願いいたします。
            今後ともご愛顧賜りますようよろしくお願い申し上げます。
          </div>
          <div class="contact__buttonContainer">
            <a href="<?php echo home_url('/'); ?>" class="contact__toTop">TOPへ戻る</a>
          </div>
        </div>
      </div>
    </div>
    <?php get_template_part('parts/common/footerSimple'); ?>
  </div>
</main>
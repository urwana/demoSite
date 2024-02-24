<?php $baseAbout = ['path' => "./", 'title' => "会社概要", 'css' => "about", 'description' => "架空のコーポレートデモサイトの会社概要ページです。"];
get_template_part('parts/common/header', null, array('base' => $baseAbout)); ?>
<main>
  <div class="wrapper">
    <?php $mainViewData = [
      'pageNameEn' => "About",
      'pageNameJp' => "私たちについて",
      'pageNames' => ["about"]
    ];
    get_template_part('parts/common/mainView', null, array('mainViewData' => $mainViewData)); ?>
    <?php $summarySectionData = [
      'anchorLink1' => "philosophy",
      'sectionName1' => "経営理念",
      'anchorLink2' => "access",
      'sectionName2' => "アクセス",
      'anchorLink3' => "companyProfile",
      'sectionName3' => "会社概要",
      'sectionTitle' => "国境を超え、メーカーを超え<br>「型にはまらない」あなただけの歓びを",
      'sectionText' => "弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。"
    ];
    $linkTabDataAbout = [
      [
        'actions' => "#philosophy",
        'labels' => "経営理念"
      ],
      [
        'actions' => "#access",
        'labels' => "アクセス"
      ],
      [
        'actions' => "#companyProfile",
        'labels' => "会社概要"
      ],
    ];
    get_template_part('parts/common/summarySection', null, array('summarySectionData' => $summarySectionData, 'linkTabData' => $linkTabDataAbout));
    get_template_part('parts/about/philosophySection');
    get_template_part('parts/about/accessSection');
    get_template_part('parts/about/companyProfileSection');
    get_template_part('parts/about/slidePhoto');
    get_template_part('parts/common/footer'); ?>
  </div>
</main>
<?php get_footer(); ?>
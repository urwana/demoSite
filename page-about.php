<?php $baseAbout = ['title' => "私たち", 'description' => "Aventador 法律事務所のご紹介ページです。"];
get_template_part('parts/common/header', null, array('base' => $baseAbout)); ?>
<main>
  <div class="wrapper">
    <?php $mainViewData = [
      'pageNameEn' => "私たち",
      'pageNameJp' => "About",
      'pageNames' => ["about"]
    ];
    get_template_part('parts/common/mainView', null, array('mainViewData' => $mainViewData)); ?>
    <?php $summarySectionData = [
      'anchorLink1' => "philosophy",
      'sectionName1' => "私たちの理念",
      'anchorLink2' => "access",
      'sectionName2' => "アクセス",
      'anchorLink3' => "companyProfile",
      'sectionName3' => "弁護士事務所概要",
      'sectionTitle' => "「身近なお客様のお力に」、<br>それこそが、私たちアベンタドールの使命。",
      'sectionText' => "弁護士の仕事は、あくまで社会貢献であり、目の前のクライアントの力になるため、揺るぎない社会正義を貫くことが必要です。クライアントが、“何を求め”、“どうしたいのか”、“先々まで考え今どうすることがベストか”、クライアントの目線で寄り添い、時には導き、如何なる状況でも諦めずに一緒に考え続けていくこと、それこそが弁護士の仕事の本質です。当事務所では、総合法律事務所として、これまで多くの紛争を処理してきた実績があり、豊富な経験と専門知識により、迅速かつ適切な問題解決を実現します。"
    ];
    $linkTabDataAbout = [
      [
        'actions' => "#philosophy",
        'labels' => "私たちの理念"
      ],
      [
        'actions' => "#access",
        'labels' => "アクセス"
      ],
      [
        'actions' => "#companyProfile",
        'labels' => "事務所概要"
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
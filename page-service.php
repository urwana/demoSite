<?php $baseService = ["path " => "./", "title " => "サービス", "css " => "service", "description " => "架空のコーポレートデモサイトのサービス紹介ページです。"];
get_template_part('parts/common/header', null, array('base' => $baseService)); ?>

<main>
  <div class="wrapper">
    <?php $mainViewDataService = [
      "pageNameEn" => "Service",
      "pageNameJp" => "サービス紹介",
      "pageNames" => ["service"]
    ];
    get_template_part('parts/common/mainView', null, array('mainViewData' => $mainViewDataService)); ?>
    <div class="service">
      <?php $summarySectionData = [
        "anchorLink1" => "purchaseSupport",
        "sectionName1" => "購入サポート",
        "anchorLink2" => "repairAndMaintenance",
        "sectionName2" => "修理・整備",
        "anchorLink3" => "vehicleInspection",
        "sectionName3" => "車検・点検",
        "sectionTitle" => "お客様一人一人が求める<br>理想のカーライフに寄り添います",
        "sectionText" => "様々な輸入車・国産車のメンテナンスのご相談から点検・整備まで、親切かつスピーディな対応を心がけ、あらゆる疑問や不安にお答えします。最新鋭の自社集中工場には、四輪アライメントをはじめ最新コンピューターと各ブランドに精通した熟練のサービススタッフを配置、フロ ントでは車種ブランド別の専用電話回線をご用意しております。"
      ];
      get_template_part('parts/common/summarySection', null, array('summarySectionData' => $summarySectionData));
      $cardServiceData = [
        [
          "serviceNumber" => "01",
          "serviceTitle" => "購入サポート",
          "anchorLink" => "purchaseSupport",
          "serviceSummary" => "国を超え、メーカーを超え、高級の本質をお届けする特別な一台との出会いをサポートします。",
          "serviceImg" => "./images/service/1",
          "featureText" => "弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。"
        ],
        [
          "serviceNumber" => "02",
          "serviceTitle" => "修理・整備",
          "anchorLink" => "repairAndMaintenance",
          "serviceSummary" => "高度な輸入車修理技術と数多くの修理実績、熟練の技術・設備であなたの愛車を完全に直します。",
          "serviceImg" => "./images/service/2",
          "featureText" => "弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。"
        ],
        [
          "serviceNumber" => "03",
          "serviceTitle" => "車検・点検",
          "anchorLink" => "vehicleInspection",
          "serviceSummary" => "輸入車の取り扱いが県内トップクラス。専門の整備工場へ任せたいならわたしたちへご相談ください。",
          "serviceImg" => "./images/service/3",
          "featureText" => "弊社は、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。"
        ],
      ];
      get_template_part('parts/service/cardService', null, array('cardServiceData' => $cardServiceData)); ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>
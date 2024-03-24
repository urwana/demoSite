<?php $baseService = ["title" => "お仕事について", "description" => "Aventador 法律事務所のお仕事についての紹介ページです。"];
get_template_part('parts/common/header', null, array('base' => $baseService)); ?>
<main>
  <div class="wrapper">
    <?php $mainViewDataService = [
      "pageNameEn" => "お仕事について",
      "pageNameJp" => "Service",
      "pageNames" => ["service"]
    ];
    get_template_part('parts/common/mainView', null, array('mainViewData' => $mainViewDataService)); ?>
    <div class="service">
      <?php $summarySectionData = [
        "anchorLink1" => "personal",
        "sectionName1" => "個人の法務・不動産",
        "anchorLink2" => "inheritance",
        "sectionName2" => "相続・事業承継",
        "anchorLink3" => "corporate-advisor",
        "sectionName3" => "企業顧問",
        "sectionTitle" => "お客様お一人一人の<br>安全と安心に寄り添います",
        "sectionText" => "法人や個人事業主の方々が中心です。創業初期からご依頼頂くケースが多く、創業におけるご相談から、成長へ向けた計画策定のサポートなど、継続してご支援しています。"
      ];
      get_template_part('parts/common/summarySection', null, array('summarySectionData' => $summarySectionData));
      $cardServiceData = [
        [
          "serviceNumber" => "01",
          "serviceTitle" => "個人の法務・不動産",
          "anchorLink" => "personal",
          "serviceSummary" => "法人成りのメリット・デメリット、手続き等、自分自身で情報収集もしましたが、やはり何から始めていいのかわからず、また、今後事業を行っていくにあたり、専門家を探していました。",
          "serviceImg" => "./images/service/1",
          "featureText" => "当事務所では、上記の他、交通事故、離婚その他の家事事件、消費者被害、金銭トラブル、債務整理等の一般民事事件も取り扱っております。保育施設・学校関連の法務は、利用者であるお子さん・保護者とのトラブル、随時改正される法制度の把握、監督官庁との折衝、更には近隣住民とのトラブルの解決など、極めて専門性の高い分野です。弁護士としての仕事がまず先にあるのではなく、誰かの人生が先にあります。皆さまの人生において弁護士を必要とするときに、もしめぐり逢えたとすれば、それは素敵なことです。"
        ],
        [
          "serviceNumber" => "02",
          "serviceTitle" => "相続・事業承継",
          "anchorLink" => "inheritance",
          "serviceSummary" => "これまで不動産に関する相続案件を中心に、遺産分割・遺留分減殺請求・遺言無効確認請求・使途不明金の不当利得返還請求といった案件を数多く処理してきた実績があります。相続・事業承継トラブルの多くは、少し生前に工夫を施すことで解決することができるものがほとんどです。",
          "serviceImg" => "./images/service/2",
          "featureText" => "残されるご家族にとって一番ストレスのない相続が実現できるようサポートさせていただいております。将来の相続について少しでもお悩みがある方は、まずは、一度、当事務所までご相談ください"
        ],
        [
          "serviceNumber" => "03",
          "serviceTitle" => "企業顧問",
          "anchorLink" => "corporate-advisor",
          "serviceSummary" => "経営者の一番身近な存在として、質の高いリーガルサービスを提供させていただきます。",
          "serviceImg" => "./images/service/3",
          "featureText" => "当事務所では、事業承継、企業買収、組織再編について、各種契約書の作成のみならず、プランの策定から実行に関するアドバイスに至るまで、包括的かつ専門的なリーガルサービスを提供しております。経営者の一番身近な存在として顧問業務にあたらせていただき、その中で企業が発展し、永続的に続いていくことこそが、当事務所弁護士としての一番の遣り甲斐でもあります。ご共感いただける経営者の方は、一度、当事務所までご相談ください。"
        ],
      ];
      get_template_part('parts/service/cardService', null, array('cardServiceData' => $cardServiceData)); ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>
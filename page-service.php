<?php $baseService = ["path " => "./", "title" => "サービス", "css " => "service", "description" => "架空のコーポレートデモサイトのサービス紹介ページです。"];
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
          "featureText" => "弁護士としての仕事がまず先にあるのではなく、誰かの人生が先にあります。皆さまの人生において弁護士を必要とするときに、もしめぐり逢えたとすれば、それは素敵なことです。"
        ],
        [
          "serviceNumber" => "02",
          "serviceTitle" => "相続・事業承継",
          "anchorLink" => "inheritance",
          "serviceSummary" => "相続・事業承継トラブルの多くは、少し生前に工夫を施すことで解決することができるものがほとんどです。",
          "serviceImg" => "./images/service/2",
          "featureText" => "残されるご家族にとって一番ストレスのない相続が実現できるようサポートさせていただいております。将来の相続について少しでもお悩みがある方は、まずは、一度、当事務所までご相談ください"
        ],
        [
          "serviceNumber" => "03",
          "serviceTitle" => "企業顧問",
          "anchorLink" => "corporate-advisor",
          "serviceSummary" => "経営者の一番身近な存在として、質の高いリーガルサービスを提供させていただきます。",
          "serviceImg" => "./images/service/3",
          "featureText" => "経営者の一番身近な存在として顧問業務にあたらせていただき、その中で企業が発展し、永続的に続いていくことこそが、当事務所弁護士としての一番の遣り甲斐でもあります。ご共感いただける経営者の方は、一度、当事務所までご相談ください。"
        ],
      ];
      get_template_part('parts/service/cardService', null, array('cardServiceData' => $cardServiceData)); ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>
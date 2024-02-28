<?php
$serviceData = [
  [
    'serviceNumber' => "お仕事 01",
    'serviceName' => "個人の法務・不動産",
    'serviceText' => "不動産に関しては、貸主、借主、買手、売主等、それぞれに立場や事情があるため、不動産売買トラブル、不動産賃貸トラブル、欠陥住宅トラブル及び土地の境界トラブル等不動産を巡るトラブルは決して少なくありません。",
    'serviceLink' => "./service.html#purchaseSupport",
    'serviceImg' => "/images/top/service01"
  ],
  [
    'serviceNumber' => "お仕事 02",
    'serviceName' => "相続・事業承継",
    'serviceText' => "相続・事業承継トラブルの多くは、少し生前に工夫を施すことで解決することができるものがほとんどです。それでも相続のトラブルが多いのは、「うちは大丈夫」というちょっとした油断から全ては始まっています。",
    'serviceLink' => "./service.html#repairAndMaintenance",
    'serviceImg' => "/images/top/service02"
  ],
  [
    'serviceNumber' => "お仕事 03",
    'serviceName' => "企業顧問",
    'serviceText' => "企業法務についてもいかに未然にトラブルを防ぐかというのが非常に重要な業務です。当事務所では、事務所全体でフットワーク軽く、経営者の一番身近な存在として顧問業務にあたるとともに、関係する各士業と連携をとりながら、質の高いリーガルサービスを提供させていただきます。",
    'serviceLink' => "./service.html#vehicleInspection",
    'serviceImg' => "/images/top/service03"
  ],
];
?>
<section class="serviceSection">
  <h2 class="serviceSection__title">お仕事<span>Service</span></h2>
  <div class="serviceSection__inner">
    <?php foreach ($serviceData as $index => $element) {
      get_template_part('parts/top/card', null, array('element' => $element));
    }; ?>
  </div>
</section>
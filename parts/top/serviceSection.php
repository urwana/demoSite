<?php
$serviceData = [
  [
    'serviceNumber' => "Service01",
    'serviceName' => "購入サポート",
    'serviceText' => "国を超え、メーカーを超え、高級の本質をお届けする特別な一台との出会いをサポートします。",
    'serviceLink' => "./service.html#purchaseSupport",
    'serviceImg' => "/images/top/service01"
  ],
  [
    'serviceNumber' => "Service02",
    'serviceName' => "修理・整備",
    'serviceText' => "高度な輸入車修理技術と数多くの修理実績、熟練の技術・設備であなたの愛車を完全に直します。",
    'serviceLink' => "./service.html#repairAndMaintenance",
    'serviceImg' => "/images/top/service02"
  ],
  [
    'serviceNumber' => "Service03",
    'serviceName' => "車検・点検",
    'serviceText' => "輸入車の取り扱いが県内トップクラス。専門の整備工場へ任せたいなら弊社へご相談ください。",
    'serviceLink' => "./service.html#vehicleInspection",
    'serviceImg' => "/images/top/service03"
  ],
];
?>
<section class="serviceSection">
  <h2 class="serviceSection__title">Service</h2>
  <div class="serviceSection__inner">
    <?php foreach ($serviceData as $index => $element) {
      get_template_part('parts/top/card', null, array('element' => $element));
    }; ?>
  </div>
</section>
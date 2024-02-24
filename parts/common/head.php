<?php $base = $args['base']; ?>

<head>
  <title> <?php echo $base['title']; ?> | 架空のコーポレイトデモサイト</title>
  <meta name="description" content="<?php echo $base['description']; ?>">
  <meta name="keywords" content="プログラミング, コーディング, ウェブ開発, エキサイティングコード">

  <meta name="robots" content="index, follow"> <!-- 検索エンジンのクローラーの設定 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Internet Explorer の互換性モードの設定 -->

  <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">

  <link rel="preconnect" href="//fonts.googleapis.com">
  <link rel="preconnect" href="//fonts.gstatic.com" crossorigin>
  <link
    href="//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Oswald:wght@700&family=Roboto:wght@400;500&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css">
  <script src="//kit.fontawesome.com/f46866a57f.js" crossorigin="anonymous"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous" defer></script> -->
  <!-- The callback parameter is required, so we use console.debug as a noop -->
  <script async
    src="//maps.googleapis.com/maps/api/js?key=AIzaSyDtkBcsVltnWGZeI7WMqYe0SpeCQQ6FQco&callback=console.debug&libraries=maps,marker&v=beta">
  </script>
  <?php if (is_404()) : ?>
  <meta http-equiv="refresh" content=" 5; url=<?php echo esc_url(home_url("/")); ?>">
  <?php endif; ?>
</head>
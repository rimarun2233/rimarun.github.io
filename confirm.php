<?php require_once("data..php") ?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>注文確認</title>
    <link rel="stylesheet" type="text/css" href="neko.css">
    <link rel="stylesheeet"   href="responsive.css">
</head>
<body>
<div class="header">
    <div class="header-logo">ネコのパン屋さん</div>
    <div class="header-right">
      <div class="header-list">
        <ul>
          <li>
            <a href="index.php" class="btn home">ホーム</a>
          </li>
          <li>
          <a href="" class="btn company">会社概要</a>
          </li>
          <li>
            <a href="contactUs.php" class="btn contact">お問い合わせ</a>
          </li>
          <li>
          <a href="menu_page.php" class="btn product">商品紹介</a>
          </li>
        </ul>
    </div>
    </div>
  </div>
  <div class="order-wrapper">
      <h2>◆注文内容確認◆</h2>
      <?php  $totalPayment = 0 ?>
        <?php foreach ($menus as $menu): ?>
        <?php $orderCount = $_POST[$menu->getName()]; 
        $menu->setOrderCount($orderCount);
        $totalPayment += $menu->getTotalPrice()
        ?>
        <p class="order-amount">
        <?php echo $menu->getName() ?>
        x
        <?php echo $orderCount ?>
        個
        </p>
        <p class="order-price"><?php echo $menu->getTotalPrice() ?>円</p>
        <?php endforeach ?>
        <h3>合計金額: <?php echo $totalPayment ?>円</h3>
    </div>
</body>
</html>

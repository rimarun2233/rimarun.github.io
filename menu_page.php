<?php require_once("data..php") ?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品紹介</title>
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


  <div class="menu-wrapper container">
    <h1 class="logo">＊ネコのパン屋Menu＊</h1>
    <form action="confirm.php" method="post">
      <div class="menu-items">
        <?php foreach ($menus as $menu): ?>
          <div class="menu-item">
            <img src="<?php echo $menu->getImage() ?>" class="menu-item-image">
            <h3 class="menu-item-name"><?php echo $menu->getName() ?></h3>
            <p class="price">¥<?php echo $menu->getTaxIncludedPrice() ?>（税込）</p>
            <input type="text" value="0" name="<?php echo $menu->getName() ?>">
            <span>個</span>
          </div>
        <?php endforeach ?>
      </div>
      <input type="submit" value="注文する">
    </form>
    </div>  
</body>
</html>

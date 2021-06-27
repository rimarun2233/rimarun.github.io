<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせ</title>
  <link rel="stylesheet" type="text/css" href="neko.css">
  <link rel="stylesheeet" href="responsive.css">
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
    
    <div class="main">
        <div class="contact-form">
            <div class="form-title">お問い合わせ</div>
            <form method="post" action="sent.php">
                <div class="form-item">名前</div>
                <input type="text" name="name">
                <div class="form-item">年齢</div>
                <select name="age">
                    <option value="未選択">選択してください</option>
                    <?php for ($i = 6; $i <= 100; $i++): ?>
                    <?php echo "<option value='{$i}'>{$i}</option>"; ?>
                    <?php endfor ?>
                </select>
                <div class="form-item">メールアドレス</div>
                <input type="text" name="email">
                <div class="form-item">お問い合わせの種類</div>
                <?php 
                  $types = array("ネコのパン屋さん（お店についての）お問い合わせ", "商品についてのお問い合わせ", "取材・メディア関連のお問い合わせ", "料金に関するお問い合わせ", "その他");
                ?>
                <select name="category">
                      <option value="未選択">選択してください</option>
                      <?php foreach ($types as $type) { 
                       echo "<option value='{$type}'>{$type}</option>"; 
                       } ?>
                      
                </select>

                <div class="form-item">内容</div>
                <textarea name="body"></textarea>

                <input type="submit" value="送信">
            </form>
        </div>
    </div>




</body>

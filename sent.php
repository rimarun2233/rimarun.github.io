<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせ内容</title>
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

  <div class="main">
    <div class="thanks-message">お問い合わせいただきありがとうございます。</div>
    <div class="display-contact">

      <div class="form-title">入力内容</div>

      <div class="form-item">■ 名前</div>
      <?php echo $_POST["name"]; ?>
      <div class="form-item">■ 年齢</div>
      <?php echo $_POST["age"]; ?>
      <div class="form-item">■ メールアドレス</div>
      <?php echo $_POST["email"]; ?>
      <div class="form-item">■ お問い合わせの種類</div>
      <?php echo $_POST['category']; ?>
      <div class="form-item">■ 内容</div>
      <?php echo $_POST["body"]; ?>
    </div>
  </div>


  


</body>

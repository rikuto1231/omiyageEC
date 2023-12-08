<?php session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <title>ご注文内容確認</title>
</head>
<body>
    <header>
        <?php require "../../common/php/header.php" ?>

    </header>

    <div  id="product_detail">
    <h1>確認画面</h1>
    <hr>
    <form action="../G1-4-5/index.php">
    <?php require '../../common/php/personal information.php' ?>
    <h1>お支払方法</h1>
    <hr>
    <?php echo "<h3>　".$_POST["pay"]."</h3>"; ?>
    <button class="kakunin">購入</button>
    </form>
    <p class="modoru"><a href="../G1-4-3/index.php">ご購入手続きに戻る</a></p>
   
</div>
<script src="../../common/js/side_ber.js"></script>
</body>
</html>
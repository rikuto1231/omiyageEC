<?php session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <script src="../../common/js/sidebar.js"></script>
    <title>購入手続き画面</title>
</head>
<body>
        <header>
        <?php require "../../common/php/header.php" ?>
        </header>
            

    <div id="product_detail">
        <h1>ご購入手続き<br><h2>お届け先</h2></h1><hr>
        <form method="post" action="../G1-4-4/index.php">
        <div id="container">
        <?php require '../../common/php/personal information.php' ?>
    </div>
    
    <h1>お支払方法</h1><hr>
    <p class="payway"><input type="radio" name="pay" value="クレジットカード">クレジットカード</p>
    <p class="payway"><input type="radio" name="pay" value="paypay">paypay</p>
    <p class="payway"><input type="radio" name="pay" value="コンビニ決済">コンビニ決済</p>
    <button class="kakunin">ご注文内容の確認</button>
    </form>
    <p class="modoru"><a href="../G1-5-2/index.php">ショッピングカートに戻る</a></p>
    </div>
    <script src="../../common/js/side_ber.js"></script>
</body>
</html>
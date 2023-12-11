<?php
session_start();

require '../../common/php/DB.php'; 
?>

<!-- 共通部分接続。 -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>カート決済</title>
</head>
<body>
    <header>
        <?php require '../../common/php/header.php'; ?>
    </header>
    <div id="product_detail">
        <h1 id="title_output"> ショッピングカート</h1>

        <?php require '../../common/php/cart_output.php'; ?>

        <button class="button_next" onclick="location.href=\'../../G1-5/G1-5-2/index.php\'">ショッピングを続ける</button>


    </div>
    <!-- scriptURL変更したので問題あったら調整 -->
    <script src="../../common/js/side_ber.js"></script>
</body>
</html>

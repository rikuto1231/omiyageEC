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
        <?php require '/omiyageEC/src/common/php/header.php'; ?>
    </header>
    <div id="product_detail">
        <h1 id="title_output"> ショッピングカート</h1>

        <?php require '/omiyageEC/src/common/php/cart_get.php'; ?>

        <form action="../G1-4-3/index.php">
        <div id="num_output">
            <h4>付与ポイント  </h4>
            <!-- phpポイント計算部分 -->
            <p>小計（税込）</p>
            <hr>
            <p>送料(税込)</p>
            <hr>
            <h4>合計(税込)</h4>
            <button class="button_reg">ご購入手続き</button>
        </div>
        </form>
    </div>
    <!-- scriptURL変更したので問題あったら調整 -->
    <script src="../../common/js/side_ber.js"></script>
</body>
</html>

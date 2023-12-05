<?php session_start();?>
<!-- headerとsideber接続。
cssレイアウト中央配置だけ。
phpでpタグとしてDBからの情報出力-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../common/css/header.css">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ポイント情報画面</title>
</head>
<body>
<header>
        <?php require '../../common/php/header.php'; ?>
</header>
<script src="../../common/js/side_ber.js"></script>
    <div>
    <br>
    <br>
        <h1 style="text-align: center">
        ポイント情報</h1>
    </div>
    <div>
        <br>
        <!-- <br>
        <p>20XX/X/X &emsp;&emsp;〇〇ポイント付与</p>
        <br>
        <br>
        <p>20XX/X/X &emsp;&emsp;〇〇ポイント付与</p>
        <br> -->
    <?php 
    $id = $_GET['id'];
    require '../../common/php/point.php';?>

        <br>
        <button class="modoru" onclick="location.href='../../G1-1/index.php'">戻る</button>
    </div>
</body>
</html>
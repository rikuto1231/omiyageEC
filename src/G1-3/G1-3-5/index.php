<?php session_start();
?>
<!-- 取り消しボタン追加。画像追加。
出力をPHP方式に変更。 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../common/css/header.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>予約履歴画面</title>
</head>
<body>
    <header>
        <?php require '../../common/php/header.php'; ?>
    </header>
    <div class="main">
        <br>
        <br>
        <h1 style="text-align: left">
        &emsp;予約履歴</h1>
        <br>
        <!-- <p>〇〇〇〇〇</p>
        <p style="text-align: right">
        数量&emsp;&emsp;&emsp;</p>
        <p>￥○○○</p>
        <p style="text-align: right">
        20XX/X/X&emsp;&emsp;&emsp;</p>
        <br>
        <p>〇〇〇〇〇</p>
        <p style="text-align: right">
        数量&emsp;&emsp;&emsp;</p>
        <p>￥○○○</p>
        <p style="text-align: right">
        20XX/X/X&emsp;&emsp;&emsp;</p> -->
        <?php 
        $id = $_GET['id'];
        require '../../common/php/reservation.php';?>
        <br>
        <br>
        <button class="modoru" onclick="location.href='../../G1-1/index.php'">戻る</button>
        <script src="../../common/js/side_ber.js"></script>
    </div>
</body>
</html>
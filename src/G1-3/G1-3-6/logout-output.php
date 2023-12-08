<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログアウト画面</title>
</head>
<body>
    <div class="main">
    <?php
        if(isset($_SESSION['customer'])){
        unset($_SESSION['customer']);
        echo 'ログアウトしました。';
        }else{
        echo 'すでにログアウトしています。';
        }
        
    ?>
    <br>
    <button class="modoru" onclick="location.href='../../G1-2/G1-2-1/index.php'">戻る</button>
</div>
</body>
</html>
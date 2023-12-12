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
        if(isset($_SESSION['user_id'])){
        session_destroy();
        echo 'ログアウトしました。';
        }else{
        echo 'すでにログアウトしています。';
        }
        
    ?>
    <br>
    <button class="modoru" onclick="location.href='../../G1-1/G1-1-1/index.php'">戻る</button>
</div>
</body>
</html>
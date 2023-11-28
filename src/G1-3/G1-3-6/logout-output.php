<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログアウト画面</title>
</head>
<body>
    
    <?php require 'header.php'; ?>
    <?php require 'menu.php'; ?>
    <?php
        if(isset($_SESSION['customer'])){
        unset($_SESSION['customer']);
        echo 'ログアウトしました。';
        }else{
        echo 'すでにログアウトしています。';
        }
    ?>
    <?php require 'footer.php'; ?>
</body>
</html>
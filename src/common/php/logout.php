<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ログアウト</title>
</head>
<body>


<?php
    if(isset($_SESSION['user_id'])){
        unset($_SESSION['user_id']);
        echo 'ログアウトしました。';
    }else{
        echo 'すでにログアウトしています。';
    }
?>
</body>
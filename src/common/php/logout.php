<?php session_start(); ?>

<?php
    if(isset($_SESSION['user_id'])){
        unset($_SESSION['user_id']);
        echo 'ログアウトしました。';
    }else{
        echo 'すでにログアウトしています。';
    }
?>
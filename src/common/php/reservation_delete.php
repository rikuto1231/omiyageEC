<?php session_start();

require 'DB.php';

    // データベースへの接続を取得
    $pdo = getDatabaseConnection();
    $sql=$pdo->prepare('select * from Reservation where user_id=? and merchandise_id=?');
    $sql->execute([$_GET['id'],$GET['mid']]);
         header('Location: ../../G1-3/G1-3-5/index.php');
        
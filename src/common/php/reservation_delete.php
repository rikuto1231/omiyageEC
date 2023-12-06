<?php session_start();

require 'DB.php';
    // データベースへの接続を取得
    $pdo = getDatabaseConnection();
    $sql=$pdo->prepare('delete * from Reservation where Reservation,Merchandise
    where  Reservation.Merchandise_id=Merchandise.Merchandise_id 
    and user_id=? and ');
    $sql->execute([$_POST['id'],$_POST['mid']]);
         ?>
        
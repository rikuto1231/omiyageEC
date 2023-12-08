<?php 
// session_start();
    require 'DB.php';

    // 出力バッファリング有効化
    ob_start();


    // データベースへの接続を取得
    $pdo = getDatabaseConnection();
    $sql=$pdo->prepare('delete from Reservation where user_id=? and merchandise_id=?');
    $sql->execute([$_POST['id'],$_POST['mid']]);
    header('Location: ../../G1-3/G1-3-5/index.php');
    exit();

    // 出力バッファをフラッシュ終了
ob_end_flush();
?>

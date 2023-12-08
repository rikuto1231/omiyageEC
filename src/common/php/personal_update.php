<?php 
// session_start();
    require 'DB.php';
    // データベースへの接続を取得
    $pdo = getDatabaseConnection();
    $sql=$pdo->prepare('update User set name_family=?, name_personal=?, name_family_kana=?, name_personal_kana=?, post_code=?, prefecture=?, city_address=?, street_address=?, building=?, tel=?, mail_address=? where user_id=?');
    $sql->execute([$_POST['lastName'],$_POST['firstName'],$_POST['furiganaLastName'],$_POST['furiganaFirstName'],$_POST['postalCode'],$_POST['postalCode'],$_POST['city'],$_POST['street'],$_POST['buliding'],$_POST['phoneNumber'],$_POST['email'],$_POST['id']]);
    header('Location: ../../G1-3/G1-3-2/index.php');
    exit();
?>
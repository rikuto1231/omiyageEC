<?php session_start();
    require 'DB.php';
    // データベースへの接続を取得
    $pdo = getDatabaseConnection();
    $sql=$pdo->prepare('update User set personal_family=?, personal_personal=?, personal_family_kana=?, personal_personal_kana=?, personal_post=?, personal_prefectures=?, personal_city=?, personal_street=?, personal_buliding=?, personal_tel=?, personal_mail_address=? where user_id=?');
    $sql->execute([$_POST['lastName'],$_POST['firstName'],$_POST['furiganaLastName'],$_POST['furiganaFirstName'],$_POST['postalCode'],$_POST['postalCode'],$_POST['city'],$_POST['street'],$_POST['buliding'],$_POST['phoneNumber'],$_POST['email'],$_SESSION['user_id']]);
    header('Location: ../../G1-3/G1-3-2/index.php');
    exit();
?>
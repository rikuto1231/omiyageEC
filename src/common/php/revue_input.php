<?php
require 'DB.php';


$pdo = getDatabaseConnection(); 
// ポイント検索のsqlとphp処理
$sql=$pdo->prepare('insert into Review(user_id, merchandise_id,  review_num,  review_title, review_text, post) values (?,?,?,?,?,?)');
$sql->execute([$_POST['uid'],$_POST['mid'],$_POST['rate'],$_POST['title'],$_POST['text'],date('Y-m-d')]);
header('Location: ../../G1-7/G1-7-2/index.php');
exit();
?>
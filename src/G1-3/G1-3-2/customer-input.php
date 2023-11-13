<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録情報画面</title>
</head>
<body>
    <h1 style="text-align: center">
        登録情報</h1>

    
<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php
$name=$furigana=$postcode=$prefecture=$municipalities=$streetaddress=$buildingname=$phonenum=$address=$addresscheck=$password=$passwordcheck='';
if(isset($_SESSION['customer'])){
    $name=$_SESSION['customer']['name'];
    $furigana=$_SESSION['customer']['furigana'];
    $postcode=$_SESSION['customer']['postcode'];
    $prefecture=$_SESSION['customer']['prefecture'];
    $municipalities=$_SESSION['customer']['municipalities'];
    $streetaddress=$_SESSION['customer']['streetaddress'];
    $buildingname=$_SESSION['customer']['buildingname'];
    $phonenum=$_SESSION['customer']['phonenum'];
    $address=$_SESSION['customer']['address'];
    $addresscheck=$_SESSION['customer']['addresscheck'];
    $password=$_SESSION['customer']['password'];
    $passwordcheck=$_SESSION['customer']['passwordcheck'];
}


echo '<form action="customer-output.php" method="post">';
echo '<table>';
echo '<tr><td>お名前</td><td>';
echo '<input type="text" name="name" value="', $name,'">';
echo '</td></tr>';
echo '<tr><td>フリガナ</td><td>';
echo '<input type="text" name="furigana" value="', $furigana,'">';
echo '</td></tr>';
echo '<tr><td>郵便番号</td><td>';
echo '<input type="text" name="postcode" value="', $postcode, '">';
echo '</td></tr>';
echo '<tr><td>住所（都道府県）</td><td>';
echo '<input type="password" name="prefecture" value="',$prefecture, '">';
echo '</td></tr>';
echo '<tr><td>住所（市区町村）</td><td>';
echo '<input type="password" name="municipalities" value="',$municipalities, '">';
echo '</td></tr>';
echo '<tr><td>住所（番地など）</td><td>';
echo '<input type="password" name="streetaddress" value="',$streetaddress, '">';
echo '</td></tr>';
echo '<tr><td>住所（建物名・部屋番号など）</td><td>';
echo '<input type="password" name="buildingname" value="',$buildingname, '">';
echo '</td></tr>';
echo '<tr><td>電話番号</td><td>';
echo '<input type="password" name="phonenum" value="',$phonenum, '">';
echo '</td></tr>';
echo '<tr><td>メールアドレス</td><td>';
echo '<input type="password" name="address" value="',$address, '">';
echo '</td></tr>';
echo '<tr><td>メールアドレス（確認用）</td><td>';
echo '<input type="password" name="addresscheck" value="',$addresscheck, '">';
echo '</td></tr>';
echo '<tr><td>パスワード</td><td>';
echo '<input type="password" name="password" value="',$password, '">';
echo '</td></tr>';
echo '<tr><td>パスワード（確認用）</td><td>';
echo '<input type="password" name="passwordcheck" value="',$passwordcheck, '">';
echo '</td></tr>';
echo '</table>';
echo '</form>';
?>
<?php require 'footer.php'; ?>


<div>
    <button class="henko">変更</button>
    <br>
    <br>
    <button class="modoru">マイページに戻る</button>
</div>
</body>
</html>
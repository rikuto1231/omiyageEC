<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="../../common/php/revue_input.php">
<?php 
        $mid = $_POST['mid'];
        $uid = $_SESSION['user_id'];
        echo'<input type="hidden" name="mid" value="',$mid,'">';
        echo'<input type="hidden" name="uid" value="',$uid,'">';
       require '../../common/php/revue.php';
       ?>
    <div class="main">
        <h3 class="title">満足度</h3>
    <div class="rate-form">
    <input id="star5" type="radio" name="rate" value="5">
    <label for="star5">★</label>
    <input id="star4" type="radio" name="rate" value="4">
    <label for="star4">★</label>
    <input id="star3" type="radio" name="rate" value="3">
    <label for="star3">★</label>
    <input id="star2" type="radio" name="rate" value="2">
    <label for="star2">★</label>
    <input id="star1" type="radio" name="rate" value="1">
    <label for="star1">★</label>
</div>
        <h3 class="title" >タイトル</h3>
        <p class="info"><input type="text" name="titel"class="titel_input"></p>
        <h3 class="title">本文</h3>
        <p class="info2"><input type="text-area" name="text" class="titel_input"></p>
    </div>
        <button type="submit"class="input">送信</button>
        </form>
        <button class="back" onclick="location.href='../../G1-7/G1-7-1/index.php'">もどる</button>
</body>
</html>
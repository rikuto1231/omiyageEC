<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <br>
    <br>
    <br>
    <?php 
        $id = $_SESSION['user_id'];
       require '../../common/php/revue.php';
       ?>
    <!-- <div id="revew">
    <h2><img src="/omiyageEC/src/common/img/user.png" alt="代替テキスト"width="7%" height="14%">
    あいうえお
    </h2>
    <h2>m/d</h2>
    <h2><span class="star">★</span>☆☆☆☆</h2>
    <h2>とてもいい</h2>
    <div id="center">
    <div id="fonts">×月×日に購入<br>~~~~~~~~~~<br>~~~~~~~~~~<br>~~~~~~~~~~</div>
    </div>
    </div>
    <div id="center">
        <button class="input" onclick="location.href='../../G1-7/G1-7-2/index.php'">レビュー入力</button>
    </div>
    <br>
    <div id="center">
        <button class="back"  onclick="location.href='../../G1-5/G1-5-2/index.php'">もどる</button>
    </div> --> 
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
    input.search {
    margin-left: auto;
    margin-right: auto;
    width: 8em;
    background-image: url("../../G1-1/img/search.png");
    background-color: gainsboro;
    background-repeat: no-repeat;
    background-position: 100% center;
    padding-left: 0%;
    height: 25px;
    width:90%;
    background-size: 6.5% 80%;
    }
    </style>
</head>
<body>
    
    <img src="../../G1-1/img/user.png" alt="代替テキスト"width="7%" height="14%">
    <img src="../../G1-1/img/cart.png" alt="代替テキスト"width="7%" height="14%">
    <br>
    <div id="center">
    <input type="text"class="search">
    </div>
    <br>
    <div id="revew">
    <h2><img src="../../G1-1/img/user.png" alt="代替テキスト"width="7%" height="14%">
    あいうえお
</h2>
    <h2>m/d</h2>
    <h2>★☆☆☆☆</h2>
    <h2>とてもいい</h2>
    <div id="center">
    <div id="fonts">×月×日に購入<br>~~~~~~~~~~<br>~~~~~~~~~~<br>~~~~~~~~~~</div>
    </div>
    </div>
    <?php require '../php/revue.php' ?>
    <div id="center"><!--ボタン追加-->
        <button class="input">レビュー入力</button>
    </div>
    
    <br>
    <div id="center">
    戻る
    <div id="center">
        <button class="back">もどる</button>
    </div>
</body>
</html>
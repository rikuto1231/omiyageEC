<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>全件・条件検索画面(削除)</title>
</head>
<body>
    <div class="ber">
    <a href="../../G2-1/G2-1-1/index.php"><img src="../../common/img/icon1.png" alt="" width="50" height="50"></a>
    <p><img src="../../common/img/icon2.png" class="icon1"><a href="../../G2-2/G2-2-1/index.php" style="text-decoration:none;"  class=link>商品情報追加</a></p>
    <p><img src="../../common/img/icon3.png" class="icon1"><a href="../../G2-3/G2-3-1/index.php" style="text-decoration:none;"  class=link>商品情報更新▶</a></p>
    <p><img src="../../common/img/icon4.png" class="icon1"><a href="../../G2-4/G2-4-1/index.php" style="text-decoration:none;"  class=link>商品情報削除</a></p> 
    </div>
    <div class="main">
<?php
        echo'<h2>条件指定</h2>';
        echo'<table class="table" border="1" cellpadding="10"cellspacing="0">';
        echo'<tr><td class="td1">名称指定</td><td class="td2">';
        echo'<p>',$_POST['merchandise_name'],'</p>';
        echo'</td></tr>';
        echo'<tr><td class="td1">都道府県</td><td class="td2">';
        echo'<p>',$_POST['prefectures'],'</p>';
        echo'</td></tr>';
        echo'<tr><td class="td1">カテゴリ</td><td class="td2">';
        echo'<p>',$_POST['category'],'</p>';
        echo'</td ></tr>';
        echo'<tr><td class="td1">ブランド</td><td class="td2">';
        echo'<p>',$_POST['brand'],'</p>';
        echo'</td ></tr>';
        echo'<tr><td class="td1">価格帯</td><td class="td2">';
        echo'<p>',$_POST['price'],'</p>';
        echo'</td></tr>';
        echo'<tr><td class="td1">在庫数</td><td class="td2">';
        echo'<p>',$_POST['stock'],'</p>';
        echo'</td ></tr>';
        echo'</table>';
        echo'<form action="../G2-4-1/index.php">';
        echo'<button class="sarch">戻る</button>';
        echo'</form>';
    echo'<div class="flexbox">';
    require '../../common/php/DB.php';
        $pdo = getDatabaseConnection();
        $sql=$pdo->prepare('select * from Merchandise where merchandise_name=? or prefecture=? or category=? or brand=? or price=? or stock=?');
        $sql->execute([$_POST['merchandise_name'],$_POST['prefectures'],$_POST['category'],$_POST['brand'],$_POST['price'],$_POST['stock']]);
    foreach ($sql as $row) {
        echo'<div class="item">';
        echo'<a href="../G2-4-3/index.php?id=',$row['merchandise_id'],'">';
        echo'<img src="../../common/img/'.$row['path'].'" alt="代替テキスト" width="70%" height="70%">';
        echo'<p class="mei">',$row['merchandise_name'],'</p>';
        echo'</a>';
        echo'</form>';
        echo'</div>';
    }
    echo'</div>';
    ?>
</div>
    
</body>
</html>
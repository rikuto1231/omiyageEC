<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>検索結果画面(更新)</title>
</head>
<body>
    <div class="ber">
    <img src="/omiyageEC/src/common/kanri_icon.png" alt="" width="50" height="50">
    <br>
        <p><img src="/omiyageEC/src/common/kanri_icon2.png" class="icon1"><a href="" style="text-decoration:none;"  class=link>商品情報追加</a></p></span>
        <p><img src="../imge/kanri_icon3.png" class="icon1"><a href="" style="text-decoration:none;"  class=link>商品情報更新▶</a></p></span>
        <p><img src="../imge/kanri_icon4.png" class="icon1"><a href="" style="text-decoration:none;"  class=link>商品情報削除</a></p></span>
    </div>
    <div class="main">
        <h2>条件指定</h2>
        <table class="table" border="1" cellpadding="10"cellspacing="0">
<?php
        echo'<h2>条件指定</h2>';
        echo'<table class="table" border="1" cellpadding="10"cellspacing="0">';
        echo'<tr><td class="td1">名称指定</td><td class="td2">';
        echo'<input type="text" size="30" class="text_box" >';
        echo'</td></tr>';
        echo'<tr><td class="td1">都道府県</td><td class="td2">';
        echo'<input type="text" size="30" class="text_box">';
        echo'</td></tr>';
        echo'<tr><td class="td1">カテゴリ</td><td class="td2">';
        echo'<input type="text" size="30" class="text_box" >';
        echo'</td ></tr>';
        echo'<tr><td class="td1">ブランド</td><td class="td2">';
        echo'<input type="text" size="30" class="text_box" >';
        echo'</td ></tr>';
        echo'<tr><td class="td1">価格帯</td><td class="td2">';
        echo'<input type="number" class="text_box" >';
        echo'</td></tr>';
        echo'<tr><td class="td1">在庫数</td><td class="td2">';
        echo'<input type="text" size="30" class="text_box" >';
        echo'</td ></tr>';
        echo'</table>';
        echo'<form action="../G2-3-1/index.php">';
        echo'<button class="sarch">戻る</button>';
        echo'</form>';
    echo'<div class="flexbox">';
    echo'<form method="POST" name="a_form" action="../G2-3-3/index.php">';
    require '../../common/php/DB.php';
        $pdo = getDatabaseConnection();
        $sql=$pdo->prepare('select * from Merchandise where merchandise_name=? or prefectures=? or category=? or brand=? or price=? or stock=?');
        $sql->execute([$_POST['merchandise_name'],$_POST['prefectures'],$_POST['category'],$_POST['brand'],$_POST['price'],$_POST['stock']]);
    foreach ($sql as $row) {
        echo'<div class="item">';
        echo '<input type="hidden" name="id" value="',$row['merchandise_id'],'">';
        echo'<a onclick="document.a_form.submit();">';
        echo'<img src="../imge/a.png" alt="代替テキスト" width="70%" height="70%">';
        echo'<p class="mei">',$row['merchandise_name'],'</p>';
        echo'</a>';
        echo'</div>';
    }
    echo'</form>';
    echo'</div>';
    ?>
</div>
    
</body>
</html>
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
    <img src="../imge/kanri_icon.png" alt="">
    <br>
        <p><img src="../imge/kanri_icon2.png" class="icon1"><span>商品情報追加</p></span>
        <p><img src="../imge/kanri_icon3.png" class="icon1"><span>商品情報更新</p></span>
        <p><img src="../imge/kanri_icon4.png" class="icon1"><span>商品情報削除▶</p></span>
    </div>
    <img src="../imge/a.png" class="item">
    <div class="main">
        <?php
        require '../../common/php/DB.php';
        $pdo = getDatabaseConnection();
        $sql=$pdo->prepare('select * from Merchandise where merchandise_id=?');
        $sql->execute([$_GET['id']]);
        foreach($sql as $row){
        echo'<table class="table" border="1" cellpadding="10"cellspacing="0">';
        echo'<form action="../G2-4-4/index.php" method="post">';
        echo '<input type="hidden" name="id" value="',$row['merchandise_id'],'">';
        echo'<tr><td class="td1">名称指定</td><td class="td2">';
        echo'<p>',$row['merchandise_name'],'</p>';
        echo'</td></tr>';
        echo'<tr><td class="td1">都道府県</td><td class="td2">';
        echo'<p>',$row['prefectures'],'</p>';
        echo'</td></tr>';
        echo'<tr><td class="td1">カテゴリ</td><td class="td2">';
        echo'<p>',$row['category'],'</p>';
        echo'</td ></tr>';
        echo'<tr><td class="td1">ブランド</td><td class="td2">';
        echo'<p>',$row['brand'],'</p>';
        echo'</td></tr>';
        echo'<tr><td class="td1">価格帯</td><td class="td2">';
        echo'<p>',$row['price'],'</p>';
        echo'</td></tr>';
        echo'<tr><td class="td1">在庫数</td><td class="td2">';
        echo'<p>',$row['stock'],'</p>';
        echo'</td></tr>';
        echo'</table>';
        }
        echo'<button type="submit" class="sarch">削除</button>';
        echo'</form>';
        ?>
    </div>
    
</body>
</html>
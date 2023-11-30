<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>商品追加完了画面</title>
</head>
<body>
    <div class="ber">
    <img src="../imge/kanri_icon.png" alt="" width="50" height="50">
    <br>
        <p><img src="../imge/kanri_icon2.png" class="icon1"><a href="" style="text-decoration:none;"  class=link>商品情報追加▶</a></p></span>
        <p><img src="../imge/kanri_icon3.png" class="icon1"><a href="" style="text-decoration:none;"  class=link>商品情報更新</a></p></span>
        <p><img src="../imge/kanri_icon4.png" class="icon1"><a href="" style="text-decoration:none;"  class=link>商品情報削除</a></p></span>
    </div>
    <?php
        require '../../common/php/DB.php';
        $pdo = getDatabaseConnection();

        $sql=$pdo->prepare('insert into Merchandise(merchandise_name, prefectures, category, brand, price, stock, path) values (?,?,?,?,?,?,?)');

     if($sql->execute([$_POST['merchandise_name'],$_POST['prefectures'],$_POST['category'],$_POST['brand'],$_POST['price'],$_POST['stock'],$_POST['path']])){
        echo'追加に成功しました。';
    }else{
        echo'追加に失敗しました。';
    }
        echo '<h2>追加が完了しました</h2>';
    echo '<img src="../imge/a.png" class="item">';
    echo '<div class="main">';
        echo '<table class="table" border="1" cellpadding="10"cellspacing="0">';
        echo'<form action="" method="post">';

        echo'<tr><td class="td1">名称</td><td class="td2">';
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
        echo'<form action="..G2-2-1/index.php">';
        echo'<button class="sarch">戻る</button>';
        echo'</form>';
        echo'</div>';
    ?>
    
</body>
</html>

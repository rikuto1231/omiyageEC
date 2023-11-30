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
    <a href="../../G2-1/G2-1-1/index.php"><img src="../imge/kanri_icon.png" alt=""></a>
    <br>
        <p><img src="../imge/kanri_icon2.png" class="icon1"><span>商品情報追加</p></span>
        <p><img src="../imge/kanri_icon3.png" class="icon1"><span>商品情報更新</p></span>
        <p><img src="../imge/kanri_icon4.png" class="icon1"><span>商品情報削除▶</p></span>
    </div>
    <?php
        require '../../common/php/DB.php';
        $pdo = getDatabaseConnection();
        $sql=$pdo->prepare('delete from Merchandise where merchandise_id=?');
        $sql->execute([$_POST['id']]);
        echo'<h2>削除が完了しました</h2>';
        echo'<img src="../imge/a.png" class="item">';
        echo'<div class="main">';
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
        echo'</td></tr>';
        echo'<tr><td class="td1">価格帯</td><td class="td2">';
        echo'<p>',$_POST['price'],'</p>';
        echo'</td></tr>';
        echo'<tr><td class="td1">在庫数</td><td class="td2">';
        echo'<p>',$_POST['stock'],'</p>';
        echo'</td></tr>';
        echo'</table>';
        ?>
        <button class="sarch" onclick="location.href='../G2-4-1/index.php'">戻る</button>
    </div>
    
</body>
</html>
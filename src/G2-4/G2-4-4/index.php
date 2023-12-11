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
    <p><img src="../../common/img/icon3.png" class="icon1"><a href="../../G2-3/G2-3-1/index.php" style="text-decoration:none;"  class=link>商品情報更新</a></p>
    <p><img src="../../common/img/icon4.png" class="icon1"><a href="../../G2-4/G2-4-1/index.php" style="text-decoration:none;"  class=link>商品情報削除▶</a></p>
    </div>
    <?php
        require '../../common/php/DB.php';
        $pdo = getDatabaseConnection();
        $sql=$pdo->prepare('delete from Merchandise where merchandise_id=?');
        $sql->execute([$_POST['id']]);
        echo'<h2>削除が完了しました</h2>';
        echo'<img src="../../common/img/'.$_POST['path'].'" class="item">';
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
        echo'<tr><td class="td1">価格</td><td class="td2">';
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
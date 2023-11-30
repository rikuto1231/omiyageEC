<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styel.css">
    <title>全件・条件検索画面(削除)</title>
</head>
<body>
    <div class="ber">
    <a href="../../G2-1/G2-1-1/index.php"><img src="../../common/img/icon1.png" alt="" width="50" height="50"></a>
    <p><img src="../../common/img/icon2.png" class="icon1"><a href="../../G2-2/G2-2-1/index.php" style="text-decoration:none;"  class=link>商品情報追加</a></p>
    <p><img src="../../common/img/icon3.png" class="icon1"><a href="../../G2-3/G2-3-1/index.php" style="text-decoration:none;"  class=link>商品情報更新</a></p>
    <p><img src="../../common/img/icon4.png" class="icon1"><a href="../../G2-4/G2-4-1/index.php" style="text-decoration:none;"  class=link>商品情報削除▶</a></p>
    </div>
    <div class="main">
    <h2>条件指定</h2>
        <form action="../G2-4-2/index.php" method="POST">
        <table class="table" border="1" cellpadding="10"cellspacing="0">
        <tr><td class="td1">名称指定</td><td class="td2">
        <input type="text" size="30" class="text_box" name="merchandise_name">
        </td></tr>
        <tr><td class="td1">都道府県</td><td class="td2">
        <input type="text" size="30" class="text_box" name="prefectures">
        </td></tr>
        <tr><td class="td1">カテゴリ</td><td class="td2">
        <input type="text" size="30" class="text_box" name="category">
        </td ></tr>
        <tr><td class="td1">ブランド</td><td class="td2">
        <input type="text" size="30" class="text_box" name="brand">
        </td></tr>
        <tr><td class="td1">価格帯</td><td class="td2">
        <input type="number" class="text_box" name="price">
        </td></tr>
        <tr><td class="td1">在庫数</td><td class="td2">
        <input type="text" size="30" class="text_box" name="stock">
        </td></tr>
        </table>
        <button class="sarch" type="submit">検索</button>
        </from>
        <h2>全件表示</h2>
        <form action="../G2-4-3/index.php" method="post" name="form1">
    <?php
    echo '<div class="flexbox">';
    require '../../common/php/DB.php';
    $pdo = getDatabaseConnection();
    foreach ($pdo->query('select * from Merchandise') as $row) {
        echo'<div class="item">';
        echo'<a href="../G2-4-3/index.php?id=',$row['merchandise_id'],'">';
        echo'<img src="../imge/a.png" alt="代替テキスト" width="70%" height="70%">';
        echo'<p class="mei">',$row['merchandise_name'],'</p>';
        echo'</a>';
        echo'</form>';
        echo'</div>';
    }
    echo '</div>';
    ?>
</form>
</div>
    
</body>
</html>
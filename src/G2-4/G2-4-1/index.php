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
    <img src="../imge/kanri_icon.png" alt="">
    <br>
        <p><img src="../imge/kanri_icon2.png" class="icon1"><span>商品情報追加</p></span>
        <p><img src="../imge/kanri_icon3.png" class="icon1"><span>商品情報更新</p></span>
        <p><img src="../imge/kanri_icon4.png" class="icon1"><span>商品情報削除▶</p></span>
    </div>
    <div class="main">
    <h2>条件指定</h2>
        <form action="../G2-3-2/index.php" method="POST">
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
        <?php
        require '../../common/php/DB.php';
        $pdo = getDatabaseConnection();
        echo'<div class="flexbox">';
    foreach($pdo->query('select * from Merchandise') as $row){
        echo'<div class="item">';
            echo'<img src="/omiyageEC/src/common/img/'.$row['path'].'" alt="代替テキスト" width="70%" height="70%">';
            echo'<p class="mei">',$row['merchandise_name'],'</p>';
            echo'</div>';
        }
    echo'</div>';
    ?>
</div>
    
</body>
</html>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/G2-2-1.css">
    <title>商品追加</title>
</head>
<body>
    <div class="ber">
    <a href="../../G2-1/G2-1-1/index.php"><img src="../../common/img/icon1.png" alt="" width="50" height="50"></a>
    <p><img src="../../common/img/icon2.png" class="icon1"><a href="../../G2-2/G2-2-1/index.php" style="text-decoration:none;"  class=link>商品情報追加▶</a></p>
    <p><img src="../../common/img/icon3.png" class="icon1"><a href="../../G2-3/G2-3-1/index.php" style="text-decoration:none;"  class=link>商品情報更新</a></p>
    <p><img src="../../common/img/icon4.png" class="icon1"><a href="../../G2-4/G2-4-1/index.php" style="text-decoration:none;"  class=link>商品情報削除</a></p>
    </div>
    <div class="main">
        <form action="../G2-2-2/index.php" method="POST">
        <h2>商品追加</h2>
        <table class="table" border="1" cellpadding="10"cellspacing="0">
        <tr><td class="td1">名称指定</td><td class="td2">
        <input type="text" size="30" class="text_box" name="merchandise_name" required>
        </td></tr>
        <tr><td class="td1">都道府県</td><td class="td2">
        <input type="text" size="30" class="text_box" name="prefectures" required>
        </td></tr>
        <tr><td class="td1">カテゴリ</td><td class="td2">
        <input type="text" size="30" class="text_box" name="category" required>
        </td ></tr>
        <tr><td class="td1">ブランド</td><td class="td2">
        <input type="text" size="30" class="text_box" name="brand" required>
        </td ></tr>
        <tr><td class="td1">価格帯</td><td class="td2">
        <input type="number" class="text_box" name="price" required>
        </td></tr>
        <tr><td class="td1">在庫</td><td class="td2">
        <input type="number" class="text_box" name="stock" required>
        </td></tr>
        <tr><td class="td1">画像</td><td class="td2">
        <input type="file" class="text_box" name="path" value="" required>
        </td></tr>
        </table>
        <button type="submit" class="sarch">追加</button>
    </form>
        
    
</div>
    
</body>
</html>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/G2-2-1.css">
    <title>全件・条件検索画面(削除)</title>
</head>
<body>
    <div class="ber">
    <img src="img/kanri_icon.png" alt="">
    <br>
        <p><img src="img/kanri_icon2.png" class="icon1"><span>商品情報追加▶</p></span>
        <p><img src="img/kanri_icon3.png" class="icon1"><span>商品情報更新</p></span>
        <p><img src="img/kanri_icon4.png" class="icon1"><span>商品情報削除</p></span>
    </div>
    <div class="tab">
        <p>商品追加</p>
        <table class="table" border="1" cellpadding="10"cellspacing="0">
        <form action="G2-2-1/index.php" method="post">

        <tr><td class="td1">名称指定</td><td class="td2">
        <input type="text" size="30" class="name" >
        </td></tr>
        <tr><td class="td1">都道府県</td><td class="td2">
        <input type="text" size="30" class="prefecture">
        </td></tr>
        <tr><td class="td1">カテゴリ</td><td class="td2">
        <input type="text" size="30" class="cate" >
        </td ></tr>
        <tr><td class="td1">価格</td><td class="td2">
        <input type="number" class="price" >
        </td></tr>
        <tr><td class="td1">画像</td><td class="td2">
        <input type="file" name="img" >
        </td></tr>
        </table>
    </div>
    
</body>
</html>
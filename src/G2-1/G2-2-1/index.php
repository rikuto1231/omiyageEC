<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品追加</title>
    <link rel="stylesheet" href="css/G2-2-1.css"/>
</head>
<body>
<div class="ber">
    <img src="img/kanri_icon.png" alt="" width="50" height="50">
        <p><img src="img/kanri_icon2.png" class="icon1">商品情報追加▶</p>
        <p><img src="img/kanri_icon3.png" class="icon1">商品情報更新</p>
        <p><img src="img/kanri_icon4.png" class="icon1">商品情報削除</p>
    </div>
    <p>商品追加</p>
    
    <div class="tab">
        
    <table class="table" border="1" cellpadding="60"cellspacing="60">
    <form action="G2-2-1/index.php" method="post">

    <tr><td>名称指定</td><td>
    <input type="text" size="30" class="name" >
     </td></tr>
     <tr><td>都道府県</td><td>
     <input type="text" size="30" class="prefecture">
    </td></tr>
     <tr><td>カテゴリ</td><td>
    <input type="text" size="30" class="cate" >
    </td></tr>
    <tr><td>価格</td><td>
    <input type="number" class="price" >
    </td></tr>
    <tr><td>画像</td><td>
    <input type="file" name="img" >
    </td></tr>
    </table>
</div>
    
    
   
   <a href="" class="btn">追加</a>
</form>
    
</body>
</html>
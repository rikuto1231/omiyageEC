<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品追加</title>
    <link rel="stylesheet" href="css/2-2-1.css"/>
</head>
<body>
    <p>商品追加</p>
    <img src="img/icon1.png" alt="アイコン１"></img>
    <table class="table" border="1" cellpadding="10"cellspacing="0">
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
    
    
    <p><a href="" class="add" onclick="location.href='G1-1/index.php'">追加</a></p>
</form>
    
</body>
</html>
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
    
    <form action="G2-2-1/index.php" method="post">
    <table>
    <tr><td>名称指定</td><td>
    <input type="text" name="name" >
     </td></tr>
     <tr><td>都道府県</td><td>
     <input type="text" name="prefecture">
    </td></tr>
     <tr><td>カテゴリ</td><td>
    <input type="text" name="cate" >
    </td></tr>
    <tr><td>価格</td><td>
    <input type="number" name="price" >
    </td></tr>
    <tr><td>画像</td><td>
    <input type="file" name="img" >
    </td></tr>
    </table>
    <input type="submit" value="追加">
    </form>

</body>
</html>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>商品更新画面</title>
</head>
<body>
    <div class="ber">
    <img src="../imge/kanri_icon.png" alt=""  width="50" height="50">
    <br>
        <p><img src="../imge/kanri_icon2.png" class="icon1"><a href="" style="text-decoration:none;"  class=link>商品情報追加</a></p></span>
        <p><img src="../imge/kanri_icon3.png" class="icon1"><a href="" style="text-decoration:none;"  class=link>商品情報更新▶</a></p></span>
        <p><img src="../imge/kanri_icon4.png" class="icon1"><a href="" style="text-decoration:none;"  class=link>商品情報削除</a></p></span>
    </div>
    <img src="../imge/a.png" class="item">
    <div class="main">
        <table class="table" border="1" cellpadding="10"cellspacing="0">
        <form action="../G2-3-4/index.php" method="post">

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
        </table>
        <button class="sarch" type="submit">更新</button>
</form>
    </div>


    
    
</body>
</html>
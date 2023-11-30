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
    <a href="../../G2-1/G2-1-1/index.php"><img src="/omiyageEC/src/common/img/kanri_icon.png" alt=""  width="50" height="50"></a>
    <br>
        <p><img src="/omiyageEC/src/common/img/kanri_icon2.png" class="icon1"><a href="" style="text-decoration:none;"  class=link>商品情報追加</a></p></span>
        <p><img src="/omiyageEC/src/common/img/kanri_icon3.png" class="icon1"><a href="" style="text-decoration:none;"  class=link>商品情報更新▶</a></p></span>
        <p><img src="/omiyageEC/src/common/img/kanri_icon4.png" class="icon1"><a href="" style="text-decoration:none;"  class=link>商品情報削除</a></p></span>
    </div>
    <img src="/omiyageEC/src/common/img/a.png" class="item">
    <div class="main">
    <?php
        require '../../common/php/DB.php';
        $pdo = getDatabaseConnection();
        $sql=$pdo->prepare('select * from Merchandise where merchandise_id=?');
        $sql->execute([$_GET['id']]);
        foreach($sql as $row){
        echo'<table class="table" border="1" cellpadding="10"cellspacing="0">';
        echo'<form action="../G2-3-4/index.php" method="post">';
        echo '<input type="hidden" name="id" value="',$row['merchandise_id'],'">';
        echo'<tr><td class="td1">名称指定</td><td class="td2">';
        echo'<input type="text" size="30" class="text_box" name="merchandise_name"value="',$row['merchandise_name'],'">';
        echo'</td></tr>';
        echo'<tr><td class="td1">都道府県</td><td class="td2">';
        echo'<input type="text" size="30" class="text_box" name="prefectures" value="',$row['prefectures'],'">';
        echo'</td></tr>';
        echo'<tr><td class="td1">カテゴリ</td><td class="td2">';
        echo'<input type="text" size="30" class="text_box" name="category" value="',$row['category'],'">';
        echo'</td ></tr>';
        echo'<tr><td class="td1">ブランド</td><td class="td2">';
        echo'<input type="text" size="30" class="text_box" name="brand" value="',$row['brand'],'">';
        echo'</td ></tr>';
        echo'<tr><td class="td1">価格帯</td><td class="td2">';
        echo'<input type="number" class="text_box" name="price" value="',$row['price'],'">';
        echo'</td></tr>';
        echo'<tr><td class="td1">在庫</td><td class="td2">';
        echo'<input type="number" class="text_box" name="stock" value="',$row['stock'],'">';
        echo'</td></tr>';
        echo'</table>';
        }
        echo'<button class="sarch" type="submit">更新</button>';
        echo'</form>';
    ?>
    </div>


    
    
</body>
</html>
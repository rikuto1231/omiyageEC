<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品予約画面</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../../common/css/header.css">
</head>
<body>
    <header>
        <header>
            <?php require '../../common/php/header.php'; ?>
        </header>
    <div class="main">
        <div id="menu_all">
        <p>〇〇県<br>
        〇〇〇〇〇〇</p>
        </div>
        <div class="item">
            <img src="img/sample.jpg" alt="代替テキスト" width="300px" height="200px">
            </div>
            <div class="mozi">
        <p>価格 : 〇〇〇〇〇</p>
            <p class="point">付与ポイント 〇〇ポイント</p>
            <div> 数量 : <span>在庫がないため、予約が可能です</span></div>
            <a href="../../G1-7/G1-7-1/index.php">レビュー</a>
            </div>
            <div class ="button3">
                <button class="cartbutton" onclick="location.href='../G1-6-2/index.php'">予約</button>
            </div>
            <div class="button4">
                <button class="homebutton" onclick="location.href='../../G1-4/G1-4-1/index.php'">検索ホームに戻る</button>
                </div>
            </div>
</div>
            <script src="../../common/js/side_ber.js"></script>
        
</body>
</html>

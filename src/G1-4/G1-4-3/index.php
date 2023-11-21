<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../common/css/header.css">
</head>
<body>
    <header>
        <header>
            <?php require '../../common/php/header.php'; ?>
        </header>
    <div classm="main">
        <div id="menu_all">
        <p>〇〇県<br>
        〇〇〇〇〇〇</p>
        </div>
        <div class="item">
            <img src="../img/aso.jpg" alt="代替テキスト" width="90%" height="30%">
            </div>
            <div class="mozi">
        <p>価格 : 〇〇〇〇〇</p>
            <p class="point">付与ポイント 〇〇ポイント</p>
            <div> 数量 :<button class="prev-button" @click="changeSlide(-1)">-</button>1<button class="next-button" @click="changeSlide(1)">+</button></div>
            <a href="">レビュー</a>
            </div>
            <div class ="button3">
                <button class="cartbutton">カートに入れる</button>
                <button class="homebutton">検索ホームに戻る</button>
                </div>
            </div>
</div>
            <script src="../../common/js/side_ber.js"></script>
        
</body>
</html>

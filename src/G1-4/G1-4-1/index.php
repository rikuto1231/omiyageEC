
<!-- 共通部分接続。<br>改行を修正。css配置にする -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>カート画面</title>
</head>
<body>
    <header>
            <div class="sidebar">
                <img id="closeButton" src="../../common/img/close.png">
                <!-- サイドバーの内容 -->
                <hr>
                <p>○○○○さん</p>
                <hr>
                <p><a href="../../G1-3/G1-3-4/index.php">ポイント</a></p>
                <hr>
                <p><a href="../../G1-3/G1-3-2/index.php">登録情報</a></p>
                <hr>
                <p><a href="../../G1-3/G1-3-3/index.php">購入履歴</a></p>
                <hr>
                <p><a href="../../G1-3/G1-3-5/index.php">予約確認</a></p>
                <hr>
                <p><a href="">ログイン</a></p>
                <hr>
                <p><a href="../../common/php/logout.php">ログアウト</a></p>
            </div>
            <img id="toggleButton" src="../../common/img/user.png" width="40" height="40">
            <a href="../../G1-5/G1-5-1/index.php">
                <img id="cart_button" src="../../common/img/cart.jpg" width="40" height="40">
            </a>
            <div id="search_all">
                <input type="text" class="search_box" placeholder="検索">
                <button class="conditions_img">
                    <img src="../../common/img/kensakku.png" width="20" height="20">
                </button>
                <p><a href="../../G1-4/G1-4-2/index.php" id="conditions">絞り込み条件を開く▽</a></p>
            </div>
        </header>
    <div id="product_detail">
        <br>
        <br>
        <br>
        <p>カートは空です</p>
        <br>
        <br>
        <br>
        <button class="modoru" onclick="location.href='../../G1-4/G1-4-2/index.php'">ショッピングを続ける</button>
    </div>
    <script src="../../common/js/side_ber.js"></script>
</body>
</html>
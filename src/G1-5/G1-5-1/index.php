
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
                <img id="closeButton" src="../imge/close.png">
                <!-- サイドバーの内容 -->
                <hr>
                <p>○○○○さん</p>
                <hr>
                <p><a href="">ポイント</a></p>
                <hr>
                <p><a href="">登録情報</a></p>
                <hr>
                <p><a href="">購入履歴</a></p>
                <hr>
                <p><a href="">予約確認</a></p>
                <hr>
                <p><a href="">ログイン</a></p>
                <hr>
                <p><a href="">ログアウト</a></p>
            </div>
            <img id="toggleButton" src="../imge/user.png" width="40" height="40">
            <a href="">
                <img id="cart_button" src="../imge/cart.jpg" width="40" height="40">
            </a>
            <div id="search_all">
                <input type="text" class="search_box" placeholder="検索">
                <button class="conditions_img">
                    <img src="../imge/kensakku.png" width="20" height="20">
                </button>
                <p><a href="" id="conditions">絞り込み条件を開く▽</a></p>
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
        <button class="modoru">ショッピングを続ける</button>
    </div>
</body>
</html>
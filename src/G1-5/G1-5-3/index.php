<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <script src="../../common/js/sidebar.js"></script>
    <title>購入手続き画面</title>
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
            <a href="../../G1-5/G1-5-2/index.php">
                <img id="cart_button" src="../imge/cart.jpg" width="40" height="40">
            </a>
            <div id="search_all">
                <input type="text" class="search_box" placeholder="検索">
                <button class="conditions_img">
                    <img src="../imge/kensakku.png" width="20" height="20">
                </button>
                <p><a href="../../G1-4/G1-4-1/index.php" id="conditions">絞り込み条件を開く▽</a></p>
            </div>
        </header>
    <div id="product_detail">
    <h1>ご購入手続き</h1>
    <hr>
    <form action="../G1-5-4/index.html">
    <p>　お名前<span class="info">　　　　　　　</span></p>
    <p>　郵便番号<span class="info">　　　　　　　</span></p>
    <p>　都道府県<span class="info">　　　　　　　</span></p>
    <p>　市区町村<span class="info">　　　　　　　</span></p>
    <p>それ以降の番地<span class="info">　　　　　　　</span></p>
    <p>建物名・部屋番号<span class="info">　　　　　　　</span></p>
    <h1>お支払方法</h1>
    <hr>
    <p class="payway"><input type="radio" name="pay" value="card">クレジットカード</p>
    <p class="payway"><input type="radio" name="pay" value="paypay">paypay</p>
    <p class="payway"><input type="radio" name="pay" value="convini">コンビニ決済</p>
    <button class="kakunin">ご注文内容の確認</button>
    <p class="modoru"><a href="../G1-5-2/index.html">ショッピングカートに戻る</a></p>
    </form>
    </div>
    <script src="../../common/js/side_ber.js"></script>
</body>
</html>
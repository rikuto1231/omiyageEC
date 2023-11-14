<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- scriptURL変更したので問題あったら調整 -->
        <script src="../../common/js/header-move.js"></script>
    <title>カート決済</title>
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
        <h1 id="title_output"> ショッピングカート</h1>

        <div class="product">
            <p id="cart_mess">カートに入っているアイテム</p>
            <img class="img_product" src="../imge/cart.jpg" width="100" height="100">
            <div class="in_cart">
            <h4>商品名</h4>
            <h4><select name="number">
                <?php
                for($i = 1; $i <= 10; $i++) {
                    echo '<option value="', $i, '">', $i, '</option>';
                }
                ?>
            </select>￥値段<button class="delete_button">削除</button></h4>
            </div>
            <button class="button_next">ショッピングを続ける</button>
        </div>
        <div id="num_output">
            <h4>付与ポイント  </h4>
            <!-- phpポイント計算部分 -->
            <p>小計（税込）</p>
            <hr>
            <p>送料(税込)</p>
            <hr>
            <h4>合計(税込)</h4>
            <button class="button_reg">ショッピングを続ける</button>
        </div>
    </div>
    <!-- scriptURL変更したので問題あったら調整 -->
    <script src="../../common/js/sidebar.js"></script>
    
</body>
</html>

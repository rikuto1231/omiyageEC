<?php session_start();
?>
<!-- 共通部分接続。 -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>カート決済</title>
</head>
<body>
    <header>
        
    </header>
    <div id="product_detail">
        <h1 id="title_output"> ショッピングカート</h1>

        <div class="product">
            <p id="cart_mess">カートに入っているアイテム</p>
            <img class="img_product" src="/omiyageEC/src/common/img/cart.jpg" width="100" height="100">
            <div class="in_cart">
            <h5>商品名</h5>
            <h5><select name="number">
                <?php
                for($i = 1; $i <= 10; $i++) {
                    echo '<option value="', $i, '">', $i, '</option>';
                }
                ?>
            </select></h5>
            <h5>￥値段<button class="delete_button">削除</button></h5>
            </div>
            <button class="button_next" onclick="location.href='../../G1-5/G1-5-2/index.php'">ショッピングを続ける</button>
        </div>
        <form action="../G1-4-3/index.php">
        <div id="num_output">
            <h4>付与ポイント  </h4>
            <!-- phpポイント計算部分 -->
            <p>小計（税込）</p>
            <hr>
            <p>送料(税込)</p>
            <hr>
            <h4>合計(税込)</h4>
            <button class="button_reg">ご購入手続き</button>
        </div>
        </form>
    </div>
    <!-- scriptURL変更したので問題あったら調整 -->
    <script src="../../common/js/side_ber.js"></script>
</body>
</html>

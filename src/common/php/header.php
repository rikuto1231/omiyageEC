<!-- header.php -->

<?php
    echo '<div class="sidebar">
        <img id="closeButton" src="img/close.png">

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
        <p><a href="../../common/php/logout.php">ログアウト</a></p>
        </div>
        <img id="toggleButton" src="img/user.png" width="40" height="40">
        <a href="../../G1-5/G1-5-2/index.php">
        <img id="cart_button" src="img/cart.jpg" width="40" height="40">
        </a>
        <div id="search_all">
        <form method="get" action="">
            <input type="text" class="search_box" placeholder="検索" value="" name="search_box">
            <button class="conditions_img">
                <img src="img/search.png" width="20" height="20">
            </button>
        </form>
        <p><a href="../../G1-4/G1-4-1/index.php" id="conditions">絞り込み条件を開く▽</a></p>
        </div>';
?>

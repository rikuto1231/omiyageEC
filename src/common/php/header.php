<!-- header.php -->

<?php
    echo '<div class="sidebar">
        <img id="closeButton" src="/omiyageEC/src/common/img/close.png">

        <hr>
        <p>'.$_SESSION['personal_personal'].'　さん</p>
        <hr>
        <p><a href="/omiyageEC/src/G1-2/index.php">トップ</a></p>
        <hr>
        <p><a href="/omiyageEC/src/G1-3/G1-3-4/index.php">ポイント</a></p>
        <hr>
        <p><a href="/omiyageEC/src/G1-3/G1-3-2/index.php">登録情報</a></p>
        <hr>
        <p><a href="/omiyageEC/src/G1-3/G1-3-3/index.php">購入履歴</a></p>
        <hr>
        <p><a href="/omiyageEC/src/G1-3/G1-3-5/index.php">予約確認</a></p>
        <hr>
        <p><a href="/omiyageEC/src/G1-3/G1-3-6/logout-input.php">ログアウト</a></p>
        </div>
        <img id="toggleButton" src="/omiyageEC/src/common/img/user.png" width="40" height="40">
        <a href="/omiyageEC/src/common/php/cart_check.php">
        <img id="cart_button" src="/omiyageEC/src/common/img/cart.jpg" width="40" height="40">
        </a>
        <div id="search_all">
        <form method="get" action="/omiyageEC/src/G1-5/G1-5-2/index.php">
            <input type="text" class="search_box" placeholder="検索" value="" name="search_box">
            <button class="conditions_img">
                <img src="/omiyageEC/src/common/img/search.png" width="20" height="20">
            </button>
        </form>
        <p><a href="/omiyageEC/src/G1-5/G1-5-1/index.php" id="conditions">絞り込み条件を開く▽</a></p>
        </div>';
?>

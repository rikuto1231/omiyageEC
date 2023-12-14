<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div id="app">
            <div class="sidebar">
                <img id="closeButton" src="/omiyageEC/src/common/img/close.png">
                <hr>
                <p>○○○○さん</p>
                <hr>
                <!-- 絶対パスに変更 -->
                <p><a href="../../G1-3/G1-3-4/index.php">ポイント</a></p>
                <hr>
                <p><a href="../../G1-3/G1-3-2/index.php">登録情報</a></p>
                <hr>
                <p><a href="../../G1-3/G1-3-3/index.php">購入履歴</a></p>
                <hr>
                <p><a href="../../G1-3/G1-3-5/index.php">予約確認</a></p>
                <hr>
                <p><a href="../../G1-1/G1-1-1/index.php">ログイン</a></p>
                <hr>
                <p><a href="../../common/php/logout.php">ログアウト</a></p>
            </div>
            <img id="toggleButton" src="/omiyageEC/src/common/img/user.png" width="40" height="40">
            <a href="../../G1-5/G1-5-2/index.php">
                <img id="cart_button" src="/omiyageEC/src/common/img/cart.jpg" width="40" height="40">
            </a>
            <form id="myForm" method="get" action="/omiyageEC/src/G1-5/G1-5-2/index.php">
                <div id="search_all">
                    <input type="text" class="search_box" placeholder="検索" name="search_box">
                    <button class="conditions_img">
                        <img src="/omiyageEC/src/common/img/search.png" width="20" height="20">
                    </button>
                </div>
                <!-- カテゴリ、価格、都道府県の選択フォーム -->
                <div id="menu_all">
                    
                    <div class="container">
                    <!-- コンテンツ -->
                    </div>

                    <h2>カテゴリ</h2>
                    <select id="category" name="category">
                        <option value="0">選択してください</option>
                        <?php

                        require '../../common/php/category.php';

                        while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
                        $options .= "<option value='". $row['category'] ."'>". $row['category'] ."</option>";
                        }
                        echo $options; 
                        ?>

                    </select>
                    <h2>価格</h2>
                    <select id="priceRange" name="priceRange">
                        <option value="0">選択してください</option>
                        <option value="1">～1000円</option>
                        <option value="2">1001円～2000円</option>
                        <option value="3">2001円～3000</option>
                        <option value="4">3001円～4000円</option>
                        <option value="5">4001円～5000</option>
                        <option value="6">5001円～</option>
                    </select>
                    <h2>都道府県</h2>
                    <select id="prefecture" name="prefecture">
                        <option value="0">選択してください</option>
                        <option value="北海道">北海道</option>
                        <option value="東京">東京都</option>
                        <option value="京都">京都</option>
                        <option value="大阪">大阪</option>
                        <option value="福岡">福岡</option>
                        <option value="熊本">熊本</option>
                        <option value="沖縄">沖縄</option>
                    </select>
                </div>
            </form>
        </div>

        <button class="modoru" onclick="location.href='../../G1-2/index.php'">戻る</button>
    </header>

    <!-- サイドバーのJavaScriptファイル -->
    <script src="/omiyageEC/src/common/js/side_ber.js"></script>
</body>

</html>



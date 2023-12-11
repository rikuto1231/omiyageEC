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
                <p><a href="">ログイン</a></p>
                <hr>
                <p><a href="../../common/php/logout.php">ログアウト</a></p>
            </div>
            <img id="toggleButton" src="/omiyageEC/src/common/img/user.png" width="40" height="40">
            <a href="../../G1-5/G1-5-2/index.php">
                <img id="cart_button" src="/omiyageEC/src/common/img/cart.jpg" width="40" height="40">
            </a>
            <div id="search_all">
                <form id="myForm" method="get" action="/omiyageEC/src/G1-5/G1-5-2/index.php" @submit.prevent="submitForm">
                    <input type="text" class="search_box" placeholder="検索" value="" name="search_box">
                    <button class="conditions_img">
                        <img src="/omiyageEC/src/common/img/search.png" width="20" height="20">
                    </button>
                </form>
            </div>
            <div id="menu_all">
                <div class="container">
                </div>
                <h2>カテゴリ</h2>
                <select id="category" v-model="selectedCategory">
                    <option v-for="category in categories" :key="category.id" :value="category.id">{{ category.name }}</option>
                </select>
                <h2>価格</h2>
                <select id="priceRange" v-model="selectedPriceRange">
                    <option v-for="priceRange in priceRanges" :key="priceRange.id" :value="priceRange.id">{{ priceRange.name }}</option>
                </select>
                <h2>都道府県</h2>
                <select id="prefecture" v-model="selectedPrefecture">
                    <option v-for="prefecture in prefectures" :key="prefecture.id" :value="prefecture.id">{{ prefecture.name }}</option>
                </select>
            </div>
        </div>
    </header>

    <script src="/omiyageEC/src/common/js/side_ber.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="script.js"></script>
</body>

</html>

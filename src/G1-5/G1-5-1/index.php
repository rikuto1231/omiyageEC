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

            <div id="search_all">
                <form id="myForm" method="get" action="/omiyageEC/src/G1-5/G1-5-2/index.php">
                    <input type="text" class="search_box" placeholder="検索" name="search_box">
                    <button class="conditions_img">
                        <img src="/omiyageEC/src/common/img/search.png" width="20" height="20">
                    </button>
                </form>
            </div>
            <!-- カテゴリ、価格、都道府県の選択フォーム -->
            <div id="menu_all">
                <div class="container">
                    <!-- コンテンツ -->
                </div>
                <h2>カテゴリ</h2>
                <select id="category">
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
                <select id="priceRange">
                    <option value="0">選択してください</option>
                    <option value="1">～1000円</option>
                    <option value="2">1001円～2000円</option>
                    <option value="3">2001円～3000</option>
                    <option value="4">3001円～4000円</option>
                    <option value="5">4001円～5000</option>
                    <option value="6">5001円～</option>
                </select>
                <h2>都道府県</h2>
                <select id="prefecture">
                    <option value="0">選択してください</option>
                    <option value="1">北海道</option>
                    <option value="2">青森</option>
                    <option value="3">岩手</option>
                    <option value="4">宮城</option>
                    <option value="5">秋田</option>
                    <option value="6">山形</option>
                    <option value="7">福島</option>
                    <option value="8">茨城</option>
                    <option value="9">栃木</option>
                    <option value="10">群馬</option>
                    <option value="11">埼玉</option>
                    <option value="12">千葉</option>
                    <option value="13">東京都</option>
                    <option value="14">神奈川</option>
                    <option value="15">新潟</option>
                    <option value="16">富山</option>
                    <option value="17">石川</option>
                    <option value="18">福井</option>
                    <option value="19">山梨</option>
                    <option value="20">長野</option>
                    <option value="21">岐阜</option>
                    <option value="22">静岡</option>
                    <option value="23">愛知</option>
                    <option value="24">三重</option>
                    <option value="25">滋賀</option>
                    <option value="26">京都</option>
                    <option value="27">大阪</option>
                    <option value="28">兵庫</option>
                    <option value="29">奈良</option>
                    <option value="30">和歌山</option>
                    <option value="31">鳥取</option>
                    <option value="32">島根</option>
                    <option value="33">岡山</option>
                    <option value="34">広島</option>
                    <option value="35">山口</option>
                    <option value="36">徳島</option>
                    <option value="37">香川</option>
                    <option value="38">愛媛</option>
                    <option value="39">高知</option>
                    <option value="40">福岡</option>
                    <option value="41">佐賀</option>
                    <option value="42">長崎</option>
                    <option value="43">熊本</option>
                    <option value="44">大分</option>
                    <option value="45">宮崎</option>
                    <option value="46">鹿児島</option>
                    <option value="47">沖縄</option>
                </select>
            </div>
        </div>
        <button class="modoru" onclick="location.href='../../G1-2/index.php'">戻る</button>
    </header>

    <!-- サイドバーのJavaScriptファイル -->
    <script src="/omiyageEC/src/common/js/side_ber.js"></script>
</body>

</html>



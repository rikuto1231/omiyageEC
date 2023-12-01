<?php
echo '繋がってる';
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo "GET認識";
    // GETリクエストが送信された場合
    // 接続
    $pdo = getDatabaseConnection(); 

    // idを受け取る
    $id = isset($_GET['merchandise_id']) ? $_GET['merchandise_id'] : null;

    if ($id !== null) {
        echo "商品がある";
        // IDが指定されている場合、商品情報を取得
        $result = sql_search_id($pdo, $id);

        // 商品情報が存在チェック
        if ($result && count($result) > 0) {
            $row = $result[0]; // 最初の行を取得

            echo '<div class="main">
                <div id="menu_all">';
            echo '<p>' . $row['prefectures'] . '<br>' . $row['merchandise_name'] . '</p>';
            echo '</div>';

            echo '<div class="item">
                    <img src="/omiyageEC/src/common/img/'.$row['path'].'" alt="代替テキスト" width="300px" height="200px">
                </div>';

            echo '<div class="mozi">
                    <p>価格 : ' . $row['price'] . '</p>
                    <p class="point">付与ポイント ' . $row['point'] . 'ポイント</p>
                    <div> 数量 :<button class="prev-button" @click="changeSlide(-1)">-</button>1<button class="next-button" @click="changeSlide(1)">+</button></div>
                    <a href="">レビュー</a>
                </div>';

            echo '<div class="button3">
                    <button class="cartbutton">カートに入れる</button>
                    <button class="homebutton" onclick="location.href=\'../G1-4-1/index.php\'">検索ホームに戻る</button>
                </div>
            </div>';
        } else {
            // 商品情報が見つからない
            echo '<p>指定された商品は見つかりません。</p>';
        }
    } else {
        // IDが指定されてない
        echo '<p>IDが指定されていません。</p>';
    }
}
?>

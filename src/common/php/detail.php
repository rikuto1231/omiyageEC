<?php
// まだ未完成です
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // GETリクエストが送信された場合
    // 接続
    $pdo = getDatabaseConnection(); 

    // idを受け取る
    $merchandise_id = isset($_GET['merchandise_id']) ? $_GET['merchandise_id'] : null;

    if ($merchandise_id !== null) {
        // IDが指定されている場合、商品情報を取得
        $result = sql_search_id($pdo, $merchandise_id);

        // 商品情報が存在チェック
        if ($result && count($result) > 0  ) {
            $row = $result[0]; // 最初の行
        }else {
            // 商品情報が見つからない
            echo '<p>指定された商品は見つかりません。</p>';
            return;
        }

        // 在庫数が0の場合に予約含み詳細ページに遷移
        if ($row && $row['stock'] !== 0) {
            // formのパスは変更予定

            // 在庫があるとき
            echo '<div class="main">
                <div id="menu_all">';
            echo '<p>' . $row['prefecture'] . '<br>' . $row['merchandise_name'] . '</p>';
            echo '</div>';

            echo '<form action="/omiyageEC/src/common/php/cart_check.php" method="get">'; 

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
                    <button type="submit" class="cartbutton" name="add_to_cart">カートに入れる</button>
                    <input type="hidden" name="merchandise_id" value="' . $merchandise_id . '">
                    <button class="homebutton" onclick="location.href=\'../G1-4-1/index.php\'">検索ホームに戻る</button>
                </div>';

            echo '</form>';
            echo '</div>';

        } else {
            
            // 在庫がないとき
            echo '<div class="main">
                <div id="menu_all">';
            echo '<p>' . $row['prefecture'] . '<br>' . $row['merchandise_name'] . '</p>';
            echo '</div>';

            echo '<form action="/omiyageEC/src/common/php/cart_check.php" method="get">'; 

            echo '<div class="item">
                    <img src="/omiyageEC/src/common/img/'.$row['path'].'" alt="代替テキスト" width="300px" height="200px">
                </div>';

            echo '<div class="mozi">
                    <p>価格 : ' . $row['price'] . '</p>
                    <p class="point">付与ポイント ' . $row['point'] . 'ポイント</p>
                    <p>在庫がないため予約が可能です</p>
                    <div> 数量 :
                        <button class="prev-button" @click="changeSlide(-1)">-</button>
                            1
                        <button class="next-button" @click="changeSlide(1)">+</button>
                    </div>
                    <a href="">レビュー</a>
                </div>';

            echo '<div class="button3">
                    <button type="submit" class="cartbutton" name="add_to_cart">予約</button>
                    <input type="hidden" name="merchandise_id" value="' . $merchandise_id . '">
                    <button class="homebutton" onclick="location.href=\'../G1-4-1/index.php\'">検索ホームに戻る</button>
                </div>';

            echo '</form>';
            echo '</div>';
            
        }
            
    }else {
        // IDが指定されてない
        echo '<p>IDが指定されていません。</p>';
    }
} 
    

?>

<?php


        // DBから商品IDで検索して在庫数を取得
        $stmt = $pdo->prepare("SELECT * FROM Merchandise WHERE merchandise_id = :merchandise_id");
        $stmt->bindParam(':merchandise_id', $merchandise_id);
        $stmt->execute();
        $product = $stmt->fetch(PDO::FETCH_ASSOC);

        // 在庫数が0の場合に予約含み詳細ページに遷移
        if ($product && $product['stock'] === 0) {
            header("Location: /omiyageEC/src/G1-6/G1-6-1.php?merchandise_id=" . $merchandise_id);
            exit();
        } else {
            header("Location: /omiyageEC/src/G1-5/G1-5-3.php?merchandise_id=" . $merchandise_id);
            exit();
        }

?>

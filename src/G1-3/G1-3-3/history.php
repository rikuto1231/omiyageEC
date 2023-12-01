<?php require '../../common/php/DB.php'; ?>
<script src="../../common/js/side_ber.js"></script>

<?php
$id = isset($_GET['purchase_id']) ? $_GET['purchase_id'] : null;

    if ($id !== null) {
        echo "商品がある";
        // IDが指定されている場合、商品情報を取得
        $result = sql_search_id($pdo, $id);

        // 商品情報が存在チェック
        if ($result && count($result) > 0) {
            $row = $result[0]; // 最初の行を取得

            echo '<div class="main">
                <div id="menu_all">';
           
            echo '</div>';

            echo '<div class="item">
                    <img src="/omiyageEC/src/common/img/'.$row['path'].'" alt="代替テキスト" width="300px" height="200px">
                </div>';

            echo '<div class="mozi">
                    <p>
                    <p>' $row['price'] '</p>
                    <div> 数量 :'$row['']'
        
                </div>';

            echo '<div class="button3">
                    <button class="cartbutton">戻る</button>
                    <button class="homebutton" onclick="location.href=\'../G1-4-1/index.php\'">検索ホームに戻る</button>
                </div>
            </div>';
        } else {
            // 商品情報が見つからない
            echo '購入履歴がありません。</p>';
        }
    } 

?>
<?php
require 'DB.php';

// 出力バッファリング有効化
ob_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pdo = getDatabaseConnection(); 

    // 商品IDを受け取り
    $merchandise_id = isset($_POST['merchandise_id']) ? $_POST['merchandise_id'] : null;

    if ($merchandise_id !== null) {

        // 隠しフィールドの情報を取得
        $user_id = $_POST['user_id'];

        // ユーザが選んだ商品数
        $quantity = $_POST['quantity'];

        // カートにアイテムを追加(引数を対応させる)
        $cartInsertResult = insertCartItem($pdo, $user_id, $merchandise_id, $quantity);

        if ($cartInsertResult) {
            // カートへの追加が成功した場合の処理
            header("Location: /omiyageEC/src/G1-5/G1-5-3/index.php?merchandise_id=" . $merchandise_id);
            exit();
        } else {
            // カートへの追加が失敗した場合の処理
            echo '商品の追加に失敗しました。';
        }
    } else {
        // 商品IDが指定されていない
        echo '<p>商品IDが指定されていません。</p>';
    }
}

// 出力バッファをフラッシュ終了
ob_end_flush();
?>

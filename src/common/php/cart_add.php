<?php
require 'DB.php';

// 出力バッファリングを有効にする
ob_start();

// POSTは受け取れている
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pdo = getDatabaseConnection(); 

    // 商品IDを受け取る
    $merchandise_id = isset($_POST['merchandise_id']) ? $_POST['merchandise_id'] : null;

    if ($merchandise_id !== null) {

        // 隠しフィールドの商品情報を取得
        // SESSIONのuser_idが命名あってるか後で確認。SESSIONがここまで流れてない
        $user_id = $_POST['user_id'];

        // ユーザが選んだ商品数
        $quantity = $_POST['quantity'];

        // カートにアイテムを追加(引数を対応させる)
        $cartInsertResult = insertCartItem($pdo, $user_id, $merchandise_id, $quantity);

        if ($cartInsertResult) {
            // カートへの追加が成功した場合の処理
            header("Location: /omiyageEC/src/G1-4/G1-4-1/index.php?merchandise_id=" . $merchandise_id);
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

// 出力バッファをフラッシュして終了
ob_end_flush();
?>

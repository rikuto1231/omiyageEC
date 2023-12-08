<?php
// session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // カートID配列受け取り
    $cart_ids = $_SESSION['cart_ids'];

    // 購入情報をPurchaseテーブルに挿入
    $purchaseId = insertPurchase($_SESSION['user_id']);

    // 購入詳細情報をPurchaseDetテーブルに挿入
    foreach ($cartItems as $cartItem) {
        insertPurchaseDetail($purchaseId, $cartItem['merchandise_id'], $cartItem['quantity']);
    }

    // カートから商品を削除
    clearCart($_SESSION['user_id']);

    // 購入完了ページへリダイレクト
    header("Location: 適切なURL入れる");
    exit();
}




// PurchaseDetテーブルに挿入する関数
function insertPurchaseDetail($purchaseId, $merchandiseId, $quantity) {
    // ここにPurchaseDetテーブルに挿入
}

// カートクリア関数呼び出し
function clearCart($userId) {
    //カートをクリアする処理
}
?>

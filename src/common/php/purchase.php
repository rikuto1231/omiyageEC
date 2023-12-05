<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // カートから商品を取得
    $cartItems = getCartItems($_SESSION['user_id']);

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

// カートから商品を取得する関数
function getCartItems($userId) {
    // ここにカートから商品を取得するSQL
}

// Purchaseテーブルに挿入する関数
function insertPurchase($userId) {
    // Purchaseテーブルに挿入
    // 挿入が成功したら、挿入したレコードのpurchase_idを返す
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

<?php
session_start();

require 'DB.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    
    $pdo = getDatabaseConnection(); 

    // カートID配列受け取り
    $cart_ids = $_SESSION['cart_ids'];
    $user_id = $_SESSION['user_id'];


    // 購入情報をPurchaseテーブルに挿入

    $purchaseDate = date("Y-m-d");
    foreach ($cart_ids as $cart_id) {
        $purchaseIds[] = insertPurchase($pdo, $_SESSION['user_id'], $cart_id, $purchaseDate);
    }


    $checkCartQuery = "SELECT c.*, m.merchandise_name, m.path, m.price, m.stock 
    FROM Cart c
    JOIN Merchandise m ON c.merchandise_id = m.merchandise_id
    LEFT JOIN Purchase p ON c.cart_id = p.cart_id
    WHERE c.user_id = :user_id AND (c.purchased = 0 OR (p.cart_id IS NOT NULL AND c.cart_id = p.cart_id))";


        $checkCartStmt = $pdo->prepare($checkCartQuery);
        $checkCartStmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $checkCartStmt->execute();

        // 結果を受け取る
        $products = $checkCartStmt->fetchAll(PDO::FETCH_ASSOC);



    // 購入詳細情報をPurchaseDetテーブルに挿入
    foreach ($products as $product) {
        insertPurchaseDetail($pdo,$products['purchase_id'], $product['merchandise_id'], $product['quantity']);
    }

    // カートから商品を削除
    clearCart($_SESSION['user_id']);

    // 購入完了ページへリダイレクト
    header("Location: 適切なURL入れる");
    exit();
}


// カートクリア関数呼び出し
function clearCart($userId) {
    //カートをクリアする処理
}
?>

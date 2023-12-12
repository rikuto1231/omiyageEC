<?php
session_start();

require 'DB.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    
    $pdo = getDatabaseConnection(); 

    $user_id = $_SESSION['user_id'];
    

    // 購入情報をPurchaseテーブルに挿入

    $purchaseDate = date("Y-m-d");
    foreach ($_SESSION['cart_ids'] as $cart_id) {
        $purchaseIds[] = insertPurchase($pdo, $user_id, $cart_id, $purchaseDate);
    }


    $checkCartQuery = "SELECT  c.merchandise_id, quantity, p.purchase_id
    FROM Cart c
    JOIN Merchandise m ON c.merchandise_id = m.merchandise_id
    LEFT JOIN Purchase p ON c.cart_id = p.cart_id
    WHERE c.user_id = :user_id AND (c.purchased = 0 OR (p.cart_id IS NOT NULL))";
    

        $checkCartStmt = $pdo->prepare($checkCartQuery);
        $checkCartStmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $checkCartStmt->execute();

        // 結果
        $products = $checkCartStmt->fetchAll(PDO::FETCH_ASSOC);
        

        $pdo = getDatabaseConnection(); 

    // 購入詳細情報をPurchaseDetテーブルに挿入
    foreach ($products as $product) {
        insertPurchaseDetail($pdo, $product['purchase_id'], $product['merchandise_id'], $product['quantity']);
    }
    



    foreach ($_SESSION['cart_ids'] as $cart_id) {
        // カートから商品を購入済み
        CartAsPurchased($pdo, $cart_id);
    }
    

    // 購入完了ページへリダイレクト
    header("Location: /omiyageEC/src/G1-4/G1-4-4/index.php");
    exit();
}



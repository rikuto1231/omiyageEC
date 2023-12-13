<?php
session_start();

require 'DB.php';

try {

    
        $pdo = getDatabaseConnection(); 
    
        $user_id = $_SESSION['user_id'];
        
    
        // 購入情報をPurchaseテーブルに挿入

        $cart_ids[] = $_SESSION['cart_ids'];
    
        $purchaseDate = date("Y-m-d");
        foreach ($cart_ids as $cart_id) {
            $purchaseIds[] = insertPurchase($pdo, $user_id, $cart_id, $purchaseDate);
        }
    
    
        $checkCartQuery = "SELECT  p.purchase_id, c.merchandise_id, quantity
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
        
        $point = $_SESSION['points'];
        insertPoint($pdo,$user_id,$point);
    
    
        foreach ($cart_ids as $cart_id) {
            // カートから商品を購入済み
            CartAsPurchased($pdo, $cart_id);
        }
        
    
        // 購入完了ページへリダイレクト
        header("Location: /omiyageEC/src/G1-4/G1-4-5/index.php");
        exit();

}catch(PDOException $e){
    echo "エラー: " . $e->getMessage();
}



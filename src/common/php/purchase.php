<?php
session_start();

// DB

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


        // カートの中にユーザの商品が入っているかチェック
        $checkCartQuery = "SELECT c.*, m.merchandise_name, m.path, m.price, m.stock FROM Cart c
        JOIN Merchandise m ON c.merchandise_id = m.merchandise_id
        WHERE c.user_id = :user_id AND c.purchased = 0";

        $checkCartStmt = $pdo->prepare($checkCartQuery);
        $checkCartStmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $checkCartStmt->execute();

        // 結果を受け取る
        $products = $checkCartStmt->fetchAll(PDO::FETCH_ASSOC);



    // 購入詳細情報をPurchaseDetテーブルに挿入
    foreach ($cart_ids as $cart_id) {
        insertPurchaseDetail($pdo,$purchaseId, $products['merchandise_id'], $products['quantity']);
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

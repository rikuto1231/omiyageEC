<?php
session_start();

require 'DB.php';

try {
    $pdo = getDatabaseConnection(); 
    $user_id = $_SESSION['user_id'];

    // 購入情報をPurchaseテーブルに挿入。整数型に対応
    $purchaseDate = date("Y-m-d");

    // 未購入かつ該当ユーザのカート情報を取得
    $checkCartQuery = "SELECT DISTINCT cart_id FROM Cart WHERE user_id = :user_id AND purchased = 0";
    $checkCartStmt = $pdo->prepare($checkCartQuery);
    $checkCartStmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $checkCartStmt->execute();

    $cart_ids = $checkCartStmt->fetchAll(PDO::FETCH_COLUMN);

    if (!empty($cart_ids)) {
        // 購入がまだ行われていない場合のみ購入
        if (empty(checkExistingPurchase($pdo, $user_id, $cart_ids))) {
            // カート内の全商品を取得
            foreach ($cart_ids as $cart_id) {
                $checkCartQuery = "SELECT merchandise_id, quantity FROM Cart WHERE user_id = :user_id AND cart_id = :cart_id";
                $checkCartStmt = $pdo->prepare($checkCartQuery);
                $checkCartStmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
                $checkCartStmt->bindParam(':cart_id', $cart_id, PDO::PARAM_INT);
                $checkCartStmt->execute();

                $products = $checkCartStmt->fetchAll(PDO::FETCH_ASSOC);

                // 購入情報を挿入
                $purchase_id = insertPurchase($pdo, $user_id, $cart_id, $purchaseDate);

                // 購入詳細情報を挿入
                foreach ($products as $product) {
                    insertPurchaseDetail($pdo, $purchase_id, $product['merchandise_id'], $product['quantity']);
                }

                // ポイント情報を挿入
                $point = $_SESSION['points'];
                insertPoint($pdo, $user_id, $point);

                // カートから商品を購入済み
                CartAsPurchased($pdo, $cart_id);
            }
        }
    }

    // 購入完了ページへリダイレクト
    header("Location: /omiyageEC/src/G1-4/G1-4-5/index.php");
    exit();

} catch (PDOException $e) {
    echo "エラー: " . $e->getMessage();
}

// 最終調整で追加したcheck関数
function checkExistingPurchase($pdo, $user_id, $cart_ids) {
    $checkPurchaseQuery = "SELECT purchase_id FROM Purchase WHERE user_id = :user_id AND cart_id IN (" . implode(",", $cart_ids) . ")";
    $checkPurchaseStmt = $pdo->prepare($checkPurchaseQuery);
    $checkPurchaseStmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $checkPurchaseStmt->execute();
    return $checkPurchaseStmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

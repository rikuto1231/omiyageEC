<?php
session_start();

require 'DB.php';

try {
    $pdo = getDatabaseConnection(); 
    $user_id = $_SESSION['user_id'];

    // 購入情報をPurchaseテーブルに挿入
    $cart_ids = (array)$_SESSION['cart_ids']; // キャストを追加

    if (!empty($cart_ids)) {
        $purchaseDate = date("Y-m-d");

        foreach ($cart_ids as $cart_id) {
            // 購入がすでに行われているか確認
            $checkPurchaseQuery = "SELECT purchase_id FROM Purchase WHERE user_id = :user_id AND cart_id = :cart_id";
            $checkPurchaseStmt = $pdo->prepare($checkPurchaseQuery);
            $checkPurchaseStmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
            $checkPurchaseStmt->bindParam(':cart_id', $cart_id, PDO::PARAM_INT);
            $checkPurchaseStmt->execute();

            if ($checkPurchaseStmt->rowCount() == 0) {
                // 購入がまだ行われていない場合のみ購入を行う
                $purchase_id = insertPurchase($pdo, $user_id, $cart_id, $purchaseDate);

                // 購入詳細情報をPurchaseDetテーブルに挿入
                $checkCartQuery = "SELECT merchandise_id, quantity FROM Cart WHERE user_id = :user_id AND cart_id = :cart_id";
                $checkCartStmt = $pdo->prepare($checkCartQuery);
                $checkCartStmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
                $checkCartStmt->bindParam(':cart_id', $cart_id, PDO::PARAM_INT);
                $checkCartStmt->execute();

                $products = $checkCartStmt->fetchAll(PDO::FETCH_ASSOC);

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


?>



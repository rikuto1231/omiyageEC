<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // カートから購入処理を行う

    try {
        // トランザクション開始
        $pdo->beginTransaction();

        // カートから購入テーブルへデータ挿入
        $user_id = $_SESSION['user_id']; // ログインユーザーID
        $cart_id = $_SESSION['cart_id']; // カートのID

        // 購入テーブルへの挿入
        $stmt = $pdo->prepare("INSERT INTO Purchase (user_id, cart_id, purpose_date) VALUES (?, ?, NOW())");
        $stmt->execute([$user_id, $cart_id]);

        // 直前に挿入した購入のIDを取得
        $purchase_id = $pdo->lastInsertId();

        // カートの商品詳細を取得
        $stmt = $pdo->prepare("SELECT * FROM Cart WHERE cart_id = ?");
        $stmt->execute([$cart_id]);
        $cart_items = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // 購入詳細テーブルへの挿入
        foreach ($cart_items as $cart_item) {
            $stmt = $pdo->prepare("INSERT INTO PurchaseDet (purchase_id, merchandise_id, quantity) VALUES (?, ?, ?)");
            $stmt->execute([$purchase_id, $cart_item['merchandise_id'], $cart_item['quantity']);
        }

        // カート削除
        $stmt = $pdo->prepare("DELETE FROM Cart WHERE cart_id = ?");
        $stmt->execute([$cart_id]);

        // トランザクションコミット
        $pdo->commit();

        echo "購入が完了しました。";

    } catch (PDOException $e) {
        // エラーが発生した場合はロールバック
        $pdo->rollBack();
        echo "購入処理中にエラーが発生しました。";
    }
}
?>

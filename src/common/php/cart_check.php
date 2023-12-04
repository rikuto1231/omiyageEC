<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // GETリクエストが送信された場合
    // 接続
    $pdo = getDatabaseConnection(); 

    // 商品IDの取得
    $merchandise_id = isset($_GET['merchandise_id']) ? $_GET['merchandise_id'] : null;

    // 商品IDが正確に送信されている時
    if ($merchandise_id !== null) {

        // DBから商品IDで検索して在庫数を取得
        $stmt = $pdo->prepare("SELECT * FROM Merchandise WHERE merchandise_id = :merchandise_id");
        $stmt->bindParam(':merchandise_id', $merchandise_id);
        $stmt->execute();
        $product = $stmt->fetch(PDO::FETCH_ASSOC);

        // 在庫数が0の場合に予約含み詳細ページに遷移
        if ($product && $product['stock'] === 0) {
            header("Location: /omiyageEC/src/G1-6/G1-6-1.php?merchandise_id=" . $merchandise_id);
            exit();
        } else {
            header("Location: /omiyageEC/src/G1-5/G1-5-3.php?merchandise_id=" . $merchandise_id);
            exit();
        }
    } else {
        // ユーザーIDか商品IDが取得できない場合の処理
        echo '商品IDが取得できません。';
    }
}
?>

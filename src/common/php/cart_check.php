<?php
    session_start();
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // GETリクエストが送信された場合
    // 接続
    $pdo = getDatabaseConnection(); 

    // GET受け取り
    $merchandise_id = isset($_GET['merchandise_id']) ? $_GET['merchandise_id'] : null;

    // ログインユーザーのIDを取得（仮定）
    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

    if ($user_id !== null && $merchandise_id !== null) {
        // カートに追加する処理
        $quantity = 1; // 数はhiddで詳細から取得予定


        // データベースに追加するSQL
        $sql = 'INSERT INTO Cart (user_id, merchandise_id, quantity) VALUES (?, ?, ?)';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$user_id, $merchandise_id, $quantity]);

        // 画面遷移のif判定
        // 例: カートに追加されたらカートのページにリダイレクト
        header("Location: /omiyageEC/src/common/php/cart_page.php");
        exit();
    } else {
        // ユーザーIDか商品IDが取得できない場合の処理
        echo 'ユーザーIDまたは商品IDが取得できません。';
    }
}

?>

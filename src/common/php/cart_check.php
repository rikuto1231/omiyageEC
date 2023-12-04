<?php
    session_start();
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // GETリクエストが送信された場合
    // 接続
    $pdo = getDatabaseConnection(); 

    // 商品IDの取得
    $merchandise_id = isset($_GET['merchandise_id']) ? $_GET['merchandise_id'] : null;


    // 商品IDが正確に送信されている時
    if ( $merchandise_id !== null) {

        // DBから商品IDで検索して在庫数を取得。在庫数が０の時に予約含み詳細ページに遷移のif
        $stmt = $pdo->prepare("SELECT * FROM Merchandise WHERE merchandise_id = :merchandise_id AND stock = :stock");
        $stmt->bindParam(':merchandise_id', $merchandise_id);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        header("Location: /omiyageEC/src/G1-6/G1-6-1.php");
        exit();
    } else {
        // ユーザーIDか商品IDが取得できない場合の処理
        echo '商品IDが取得できません。';
    }
}

?>

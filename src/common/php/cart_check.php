<?php
session_start();

require '../../common/php/DB.php'; 

// バッファリングを開始
ob_start();

// ユーザIDの確認
if (isset($_SESSION['user_id'])) {
    // ユーザIDを取得
    $user_id = $_SESSION['user_id'];

    // カートの中に該当ユーザの商品が入っているかチェック
    $pdo = getDatabaseConnection();  

    // カートの中にユーザの商品が入っているかチェック
    $checkCartQuery = "SELECT * FROM Cart WHERE user_id = :user_id AND purchased = 0";

    $checkCartStmt = $pdo->prepare($checkCartQuery);
    $checkCartStmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $checkCartStmt->execute();

    // 結果を受け取る
    $cartItems = $checkCartStmt->fetchAll(PDO::FETCH_ASSOC);

    // カートに商品が入っている場合
    if ($cartItems) {
        // バッファリングを終了し、出力フラッシュ
        ob_end_flush();
        header('Location: /omiyageEC/src/G1-4/G1-4-2/index.php'); // 商品表示
        exit();
    } else {
        // バッファリングを終了し、出力をフラッシュ
        ob_end_flush();
        header('Location: /omiyageEC/src/G1-4/G1-4-1/index.php'); // カートが空の表示
        exit();
    }
} else {
    // バッファリングを終了し、出力をフラッシュ
    ob_end_flush();
    // ユーザIDがセッションに保存されていない場合（未ログインなど）
    header('Location: /omiyageEC/src/G1-1/G1-1-1/index.php'); // 遷移先のURLを指定
    exit();
}
?>

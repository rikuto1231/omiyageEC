<?php
session_start();
require 'DB.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // POST リクエストが送信された場合

    // ユーザIDの確認
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        
        // フォームから送信された cart_id を取得
        $cart_id = isset($_POST['cart_id']) ? $_POST['cart_id'] : null;

        if ($cart_id !== null) {
            // カートアイテムを削除する処理
            $pdo = getDatabaseConnection();  
            $deleteCartItemQuery = "DELETE FROM Cart WHERE cart_id = :cart_id AND user_id = :user_id";
            $deleteCartItemStmt = $pdo->prepare($deleteCartItemQuery);
            $deleteCartItemStmt->bindParam(':cart_id', $cart_id, PDO::PARAM_INT);
            $deleteCartItemStmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
            
            if ($deleteCartItemStmt->execute()) {
                // 削除が成功した場合、何らかのリダイレクトなどを行う
                header('Location: /cart_check.php');
                exit();
            } else {
                // 削除が失敗した場合のエラー処理
                echo "削除に失敗しました。";
                header('Location: /cart_check.php');
                exit();
            }
        }
    }
}

// 何かしらのエラーが発生した場合、エラーページなどにリダイレクトする
header('Location: /path/to/error-page.php');
exit();
?>

<!--個人情報検索-->
<?php
session_start();
require 'DB.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // データベースへの接続を取得
    $pdo = getDatabaseConnection();

    try {
        // データベースからユーザー情報を取得
        $stmt = $pdo->prepare('SELECT * FROM User WHERE user_id = :user_id');
        $stmt->bindParam(':user_id', $_SESSION['user_id']);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        $personal_name;
    } catch (PDOException $e) {
        die("データベースエラー: " . $e->getMessage());
    }
}
?>

<?php
session_start();

require 'DB.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 入力されたメールアドレスとパスワードを取得
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];

    // データベースへの接続を取得
    $pdo = getDatabaseConnection();

    try {
        // データベースからユーザー情報を取得
        $stmt = $pdo->prepare("SELECT * FROM User WHERE mail_address = :mail");
        $stmt->bindParam(':mail', $mail);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // パスワードの照合
        if ($user && password_verify($pass, $user['password'])) {
            
            // セッションでのユーザ情報の保存
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['personal_family'] = $user['name_family'];//姓
            $_SESSION['personal_family_kana'] = $user['name_family_kana'];//姓(カナ)
            $_SESSION['personal_personal']=$user['name_personal'];//名
            $_SESSION['personal_personal_kana']=$user['name_personal_kana'];//名(カナ)
            $_SESSION['personal_post']=$user['post_code'];//郵便番号
            $_SESSION['personal_prefectures']=$user['prefecture'];//都道府県
            $_SESSION['personal_city']=$user['city_address'];//市区町村
            $_SESSION['personal_street']=$user['street_address'];//番地
            $_SESSION['personal_buliding']=$user['building'];//建物名・部屋番号
            $_SESSION['personal_tel']=$user['tel'];//電話番号
            $_SESSION['personal_mail_address']=$user['mail_address'];//メールアドレス
            //電話番号、メールアドレスもセッションに保存する修正中


            // ログイン後の遷移先にリダイレクト
            header('Location: ../../G1-2/index.php');
            exit();
        } else {
            // ログイン失敗時の処理
            echo "メールアドレスまたはパスワードが正しくありません。";
        }
    } catch (PDOException $e) {
        die("データベースエラー: " . $e->getMessage());
    }
}
?>

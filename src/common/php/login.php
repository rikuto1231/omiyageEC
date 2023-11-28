<?php session_start(); ?>

<?php
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
            
             // 他データのセッション保存も追記する
             $_SESSION['user_id'] = $user['user_id']; 

             // ログイン後の遷移先にリダイレクト
<<<<<<< HEAD
             header('../../G1-1/G1-1/index.php');
=======
             header('Location:../../G1-1/G1-1/index.php');
>>>>>>> 3c3db239596e27d0b1f93de62797ddd72f11aab1
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

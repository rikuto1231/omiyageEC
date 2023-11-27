<?php session_start();?>
<?php
$host = 'mysql216.phy.lolipop.lan';
$dbname = 'LAA1517424-aso2201216';
$user = 'LAA1517424';
$pass = 'Pass0407';

$dbConnection = new DatabaseConnection($host, $dbname, $user, $pass);
return $dbConnection->getPDO(); // 接続を返す
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ログイン</title>
</head>
<body>

<?php
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
            header('Location:https://vivian-aso2301333.webdav-lolipop.jp/github/omiyageEC/src/G1-1/index.php');
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
</body>
</html>
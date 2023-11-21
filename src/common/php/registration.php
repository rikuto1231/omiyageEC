<?php
session_start();
// DB.phpにリクエスト

// データベースへの接続を取得
$pdo = getDatabaseConnection();

try {
    // データベースにデータを挿入
    $stmt = $pdo->prepare("
        INSERT INTO User (
            name_family, name_personal, name_family_kana, name_personal_kana,
            post_code, prefecture, city_address, street_address, building,
            tel, mail_address, password
        ) VALUES (
            :name_family, :name_personal, :name_family_kana, :name_personal_kana,
            :post_code, :prefecture, :city_address, :street_address, :building,
            :tel, :mail_address, :password
        )
    ");


    // セッション情報を受け取り
    $lastName = $_SESSION['lastName'];
    $firstName = $_SESSION['firstName'];
    $furiganaLastName = $_SESSION['furiganaLastName'];
    $furiganaFirstName = $_SESSION['furiganaFirstName'];
    $postalCode = $_SESSION['postalCode'];
    $prefecture = $_SESSION['prefecture'];
    $city = $_SESSION['city'];
    $street = $_SESSION['street'];
    $building = $_SESSION['building'];
    $phoneNumber = $_SESSION['phoneNumber'];
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];


    // バインドパラメータの設定
    $stmt->bindParam(':name_family', $lastName);
    $stmt->bindParam(':name_personal', $firstName);
    $stmt->bindParam(':name_family_kana', $furiganaLastName);
    $stmt->bindParam(':name_personal_kana', $furiganaFirstName);
    $stmt->bindParam(':post_code', $postalCode);
    $stmt->bindParam(':prefecture', $prefecture);
    $stmt->bindParam(':city_address', $city);
    $stmt->bindParam(':street_address', $street);
    $stmt->bindParam(':building', $building);
    $stmt->bindParam(':tel', $phoneNumber);
    $stmt->bindParam(':mail_address', $email);
    $stmt->bindParam(':password', password_hash($password, PASSWORD_DEFAULT)); // パスワードのハッシュ化

    // クエリの実行
    $stmt->execute();

    // データベース接続を閉じる
    $pdo = null;

    // セッションを破棄
    session_destroy();

    // 登録が成功したら遷移先にリダイレクト
    header('Location: 登録完了後のページURL');
} catch (PDOException $e) {
    die("データベースエラー: " . $e->getMessage());
}
?>

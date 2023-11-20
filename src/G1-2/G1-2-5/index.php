<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ログイン登録確定画面</title>
</head>
<body>
<form method="post" action="G1-2-6/index.php" id="form_all">
    <!-- 入力データを表示 -->
    
    <div id="container">
        <?php

            $lastName = $_POST['lastName'];
            $firstName = $_POST['firstName'];
            $furiganaLastName = $_POST['furiganaLastName'];
            $furiganaFirstName = $_POST['furiganaFirstName'];
            $postalCode = $_POST['postalCode'];
            $prefecture = $_POST['prefecture'];
            $city = $_POST['city'];
            $street = $_POST['street'];
            $building = $_POST['building'];
            $phoneNumber = $_POST['phoneNumber'];
            $email = $_POST['email'];
            $confirmEmail = $_POST['confirmEmail'];
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirmPassword'];

            


        ?>
    </div>
    <!-- 確認ボタン -->
    <div id="button_control">
        <button type="submit" class="btn-check">登録確定する</button><br>
    </div>

    <!-- 戻るボタン -->
    <div id="button_control">
        <button type="button" onclick="history.back()" class="btn-back">編集する</button>
    </div>
</body>
</html>
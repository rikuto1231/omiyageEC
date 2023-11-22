<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ログイン登録確定画面</title>
</head>
<body>
<form method="post" action="../G1-2-6/index.php" id="form_all">
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

            $_SESSION['lastName'] = $lastName;
            $_SESSION['firstName'] = $firstName;
            $_SESSION['furiganaLastName'] = $furiganaLastName;
            $_SESSION['furiganaFirstName'] = $furiganaFirstName;
            $_SESSION['postalCode'] = $postalCode;
            $_SESSION['prefecture'] = $prefecture;
            $_SESSION['city'] = $city;
            $_SESSION['street'] = $street;
            $_SESSION['building'] = $building;
            $_SESSION['phoneNumber'] = $phoneNumber;
            $_SESSION['email'] = $email;
            $_SESSION['confirmEmail'] = $confirmEmail;
            $_SESSION['password'] = $password;
            $_SESSION['confirmPassword'] = $confirmPassword;

        echo '<p>'.'性： '.$lastName."　　".'名： '.$firstName.'</p>' ;    
                        
        echo '<table>';
        echo '<tr><td align="right">フリガナ:</td><td align="center">'.$furiganaLastName.' '.$furiganaFirstName.'</td></tr>';
        echo '<tr><td align="right">郵便番号:</td><td align="center">'.$postalCode.'</td></tr>';
        echo '<tr><td align="right">住所:</td><td align="center">'.$prefecture.' '.$city.'</td></tr>';
        echo '<tr><td align="right">番地:</td><td align="center">'.$street.'</td></tr>';
        echo '<tr><td align="right">建物名:</td><td align="center">'.$building.'</td></tr>';
        echo '</table>';



        echo '<link rel="stylesheet" type="text/css" href="styles.css">'; // CSSファイルのリンク
        echo '<table class="table-container">';
        echo '<tr><td align="right">フリガナ:</td><td class="table-cell">'.$furiganaLastName.'　'.$furiganaFirstName.'</td><td>　　　　</td></tr>';
        echo '<tr><td align="right">郵便番号:</td><td class="table-cell">'.$postalCode.'</td><td>　　　　</td></tr>';
        echo '<tr><td align="right">住所:</td><td class="table-cell">'.$prefecture.' '.$city.'</td>　　　　<td></td></tr>';
        echo '<tr><td align="right">番地:</td><td class="table-cell">'.$street.'</td><td></td>　　　　</tr>';
        echo '<tr><td align="right">建物名:</td><td class="table-cell">'.$building.'</td><td></td>　　　　</tr>';
        echo '</table>';
        


        echo '<p>'.'メールアドレス<p>'.$email.'</p>' ;
        echo '<p>'.'パスワード<p>'.$password.'</p>' ;
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
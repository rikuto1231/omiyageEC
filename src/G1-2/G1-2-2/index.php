<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/G1-2-2.css"/>
    <title>会員ログイン</title>
</head>
<body>
    <h1>会員ログイン</h1>
    <form method="post" action="../../common/php/login.php">

        <p>
            <label for="mail">メールアドレス</label><br>
            <div class="box1">
                <input type="text" id="mail" name="mail" class="m" placeholder="入力してください" required>
            </div>
        </p>
        <p>
            <label for="pass">パスワード</label><br>
            <div class="box2">
                <input type="password" id="pass" name="pass" class="p" placeholder="パスワードを入力" required>
            </div>
        </p>

        <button type="submit" class="btn">ログイン</button>
    </form>

    <button class="btn2" onclick="location.href='../G1-2-1/index.php'">戻る</button>
</body>
</html>

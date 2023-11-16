<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/G1-2-2.css"/>
    <title>Document</title>
</head>
<body>
    <h1>会員ログイン</h1>
    <form method="post" action="../G1-2-3/index.php">
    <p><div id="mail">メールアドレス</div><br>
        <div class="box1">
            <input type="text" class="m" placeholder="入力してください" required>
        </div>
    </p>
    <p><div id="pass" >パスワード</div><br>
        <div class="box2">
            <input type="text" class="p" placeholder="パスワードを入力" required>
        </div>
    </p>

    <!-- ログインは送信タイプのボタンに変更 -->
    <p><a href="" class="btn" onclick="location.href='G1-1/index.php'">ログイン</a></p>

    </form>

    <p><a href="" class="btn2" onclick="location.href='../G1-2-1/index.php'">戻る</a></p>

    
</body>
</html>
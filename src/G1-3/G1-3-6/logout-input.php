<?php session_start();
?>
<!-- 名前をindex.phpに変更。header接続に変更。
sideber接続
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログアウト画面</title>
</head>
<body>

<div class="sidebar">
            <img id="closeButton" src="../imge/close.png">
            <!-- サイドバーの内容 -->
            <img src="../imge/user.png"width="40" height="40">
            <p>○○○○さん</p>
            <hr>
            <p><a href="">ポイント</a></p>
            <hr>
            <p><a href="">登録情報</a></p>
            <hr>
            <p><a href="">購入履歴</a></p>
            <hr>
            <p><a href="">予約確認</a></p>
            <hr>
            <p><a href="">ログイン</a></p>
            <hr>
            <p><a href="">ログアウト</a></p>
            <hr>
        </div>
        <img id="toggleButton"src="../imge/user.png"width="40" height="40">
    </header>
    <script src="side_ber.js"></script>

<div class="main">
<h1 id="title_name">ログアウト</h1>
<p>ログアウトしますか？</p>
<br>
<br>
<button class="logout" onclick="location.href='logout-output.php'">ログアウト</button>
<br>
<br>
<br>
<button class="modoru" onclick="location.href='../../G1-3/G1-3-1/index.php'">戻る</button>
</div>
</body>
</html>
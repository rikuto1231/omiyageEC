<!-- headerとsideber接続。
cssレイアウト中央配置だけ。
phpでpタグとしてDBからの情報出力-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ポイント情報画面</title>
</head>
<body>
    <header>
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
        <img id="toggleButton"src="omiyageEC/src/common/img/user.png"width="40" height="40">
    </header>
    <script src="side_ber.js"></script>

    <div>
    <br>
    <br>
        <h1 style="text-align: center">
        ポイント情報</h1>
    </div>
    <?php
    <div>
        <br>
        <br>
        <p>20XX/X/X &emsp;&emsp;〇〇ポイント付与</p>
        <br>
        <br>
        <p>20XX/X/X &emsp;&emsp;〇〇ポイント付与</p>
        <br>
        <br>
        <button class="modoru" onclick="location.href='../../G1-1/G1-1/index.php'">戻る</button>
    </div>
    ?>
</body>
</html>
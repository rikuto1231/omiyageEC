
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>カート画面</title>
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
        <img id="toggleButton"src="../imge/user.png"width="40" height="40">
    
    </header>
    <script src="side_ber.js"></script>
    <div>
        <input type="text" class="kensakubar" ><button class="kensaku"><img src="../imge/kensakku.png" width="20" height="20"></button>
        <p><a href="" class="joken">絞り込み条件を開く▽</a></p>
        <h1> ショッピングカート</h1>
    </div>
    <div>
        <br>
        <br>
        <br>
        <p>カートは空です</p>
        <br>
        <br>
        <br>
        <button class="modoru">ショッピングを続ける</button>
    </div>
</body>
</html>
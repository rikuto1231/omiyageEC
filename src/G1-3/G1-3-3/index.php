<!-- PHPに出力に変更。複数データ対応cssに変更。DB処理追加 -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../common/css/header.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>購入履歴画面</title>
</head>
<body>
    <header>
        <?php require '../../common/php/header.php'; ?>
    </header>
    <form action="history.php" method="get">
    <div class="main">
        <br>
        <br>
        <h1 style="text-align: center">
        購入履歴</h1>
        <br>
        <br>
        <p></p>
        <p style="text-align: right">
        数量&emsp;&emsp;&emsp;</p>
        <p>$_GET[]</p>
        <p style="text-align: right">
        $_GET[purchase_date]&emsp;&emsp;&emsp;</p>
        <br>$_GET[]
        <p></p>
        <p style="text-align: right">
        数量&emsp;&emsp;&emsp;</p>
        <p>￥○○○</p>
        <p style="text-align: right">
        $_GET[purchase_date]&emsp;&emsp;&emsp;</p>
        <br>
        <br>
        <br>
        <button class="modoru" onclick="location.href='../../G1-1/G1-1/index.php'">戻る</button>
    </div>
    <script src="../../common/js/side_ber.js"></script>
</body>
</html>
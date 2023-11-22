<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../common/css/header.css">
    <?php require '../../common/php/DB.php'; ?>
    <title>検索後の商品詳細画面</title>
</head>
<body>
    <header>
        <?php require '../../common/php/header.php'; ?>
    </header>
    <div class="main">
    <div class="flexbox">
        <!-- 検索情報出力php -->
        <?php require '../../common/php/search.php'; ?>
        </div>
    </div>
    </div>
    <div class ="button1">
        <!-- 遷移の処理を追記して -->
        <button class="kakunin">検索ホームに戻る</button>
    </div>
    <script src="../../common/js/side_ber.js"></script>
</body>

</html>
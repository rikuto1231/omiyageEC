<?php session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../common/css/header.css">
    <?php require '../..//common/php/DB.php'; ?>
</head>
<body>
    <header>
        <header>
            <?php require '../../common/php/header.php'; ?>
        </header>


        <!-- 詳細表示PHP -->
        <?php require '../../common/php/detail.php'; ?>


            <script src="../../common/js/side_ber.js"></script>
        
</body>
</html>

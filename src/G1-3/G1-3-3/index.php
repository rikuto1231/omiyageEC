<?php session_start();
?>
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

        <?php 
        
        require '../../common/php/header.php'; ?>

    </header>
     <div class="main">
   <form action="history.php" method="get">
    <br>
    <br>
    <h1 style="text-align: center">
    購入履歴</h1>
    <br> 

    <?php
    $id = $_GET['id'];
    require '../../common/php/history.php'; ?>
   
    <br>
    <br>
    <br>
    <button class="modoru" onclick="location.href=\'../../G1-1/index.php\'">戻る</button>
    </div>
    <script src="../../common/js/side_ber.js"></script>
    
   
    
    
    
</body>
</html>
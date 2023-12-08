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
    $id = $_SESSION['user_id'];
    require '../../common/php/history.php'; ?>
    </form>
   
    <br>
    <br>
    <br>
    <form action="../../G1-1/index.php">
    <button class="modoru" >戻る</button>
    </form>
    </div>
    <script src="../../common/js/side_ber.js"></script>
    
   
    
    
    
</body>
</html>
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
    <?php
    // $pdo = getDatabaseConnection(); 
    echo '<div class="main">';
    echo '<form action="history.php" method="get">';
    echo '<br>';
    echo '<br>' ; 
    echo '<h1 style="text-align: center">'  ;
    echo '購入履歴</h1>'   ;
    echo '<br>';  
    echo '<br>' ;
    echo '<p></p>'; 
    echo '<p style="text-align: right">';   
    echo '数量&emsp;&emsp;&emsp;</p>';  
    echo '<p>￥',$_GET['price'],'</p>';    
    echo '<p>',$_GET['quantity'],'</p>' ; 
    echo ' <p style="text-align: right">' ; 
    echo $_GET['purchase_date'],'&emsp;&emsp;&emsp;</p>';
    echo '<br>',$_GET['quantity'] ;
    echo '<p></p>';
    echo '<p style="text-align: right">';   
    echo '数量&emsp;&emsp;&emsp;</p>';
    echo '<p>￥',$_GET['price'],'</p>';   
    echo '<p style="text-align: right">';  
    echo  $_GET['purchase_date'],'&emsp;&emsp;&emsp;</p>';
    echo  '<br>';
    echo  '<br>';
    echo  '<br>';
    echo  '<button class="modoru" onclick="location.href=\'../../G1-1/G1-1/index.php\'">戻る</button>';
    echo  '</div>';
    echo  '<script src="../../common/js/side_ber.js"></script>';
    ?>
</body>
</html>
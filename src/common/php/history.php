

<?php
require '../../common/php/DB.php'; 
$pdo = getDatabaseConnection();
// $id = isset($_GET['user_id']) ? $_GET['user_id'] : null;

    // if ($id !== null) {
        // echo "商品がある";
        // IDが指定されている場合、商品情報を取得
        // $result = sql_search_id($pdo, $id);

        // 商品情報が存在チェック
        // if ($result && count($result) > 0) {
            // $row = $result[0]; // 最初の行を取得

            
    
    /*  echo '<div class="main">';
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
    echo  '<button class="modoru" onclick="location.href=\'../../G1-2/G1-2/index.php\'">戻る</button>';
    echo  '</div>';
    echo  '<script src="../../common/js/side_ber.js"></script>';
    
    
        } else {
            // 商品情報が見つからない
            echo '<p>購入履歴がありません。</p>';*/
        // }
        $sql = $pdo->prepare('SELECT *
        FROM User
        JOIN Purchase ON User.user_id = Purchase.user_id
        JOIN PurchaseDet ON Purchase.purchase_id = PurchaseDet.purchase_id
        JOIN Merchandise ON PurchaseDet.merchandise_id = Merchandise.merchandise_id
        WHERE User.user_id = :userId');
        
    $sql->execute([$id]);

    foreach($sql  as $row){
        echo'<img src="../../common/img/'.$row['path'].'" width="90px" height="90px" class="img_product">';
        echo '<p>',$row['merchandise_name'],'</p>';
        echo '<p>￥',$row['price'],'</p>';
        echo '<p>',$row['purpose_date'],'</p>';
        echo '<p>数量：',$row['quantity'],'</p>';
        echo "<br><br>";
    }
    

?>
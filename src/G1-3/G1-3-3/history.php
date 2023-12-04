<?php require '../../common/php/DB.php'; ?>
<script src="../../common/js/side_ber.js"></script>

<?php
$pdo = getDatabaseConnection();
$id = isset($_GET['user_id']) ? $_GET['user_id'] : null;

    if ($id !== null) {
        echo "商品がある";
        // IDが指定されている場合、商品情報を取得
        $result = sql_search_id($pdo, $id);

        // 商品情報が存在チェック
        if ($result && count($result) > 0) {
            $row = $result[0]; // 最初の行を取得

            
    
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
    
    
        } else {
            // 商品情報が見つからない
            echo '購入履歴がありません。</p>';
        }
    } 

?>
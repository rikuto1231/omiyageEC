<?php
    require 'DB.php';
    $pdo = getDatabaseConnection(); 
    // ポイント検索のsqlとphp処理
    $sql=$pdo->prepare('select * from Point where user_id=?');
    $sql->execute([$id]);

    foreach ($sql as $row) {
        // 日付とポイント出力
        echo'<br>';
        echo'<br>';
        echo'<p>',$row['point_date'],'&emsp;&emsp;',$row['point_grant'],'ポイント付与</p>';
        echo'<br>';
        echo'<br>';
    }
    
        

?>

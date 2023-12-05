<?php
    require 'DB.php';
    $pdo = getDatabaseConnection(); 
    // 予約検索のsqlとphp処理
    $sql=$pdo->prepare('select * from Reservation where user_id=?');
    $sql->execute([$id]);

    foreach ($sql as $row) {
        echo'<br>';
        echo'<br>';
        $sql=$pdo->prepare('select * from Merchandise where Merchandise_id=?');
        $sql->execute([$row['merchandise_id']]);
        foreach ($sql as $row) {
            echo'<img src="../../common/img/'.$row['path'].'">';
            echo'<p>',$row['merchandise_name'],'</p>';
            echo'<p>￥',$row['price'],'</p>';
        }
        echo'<br>';
        echo'<br>';
    }
    
        

?>

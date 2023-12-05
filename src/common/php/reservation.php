<?php
    require 'DB.php';
    $pdo = getDatabaseConnection(); 
    // 予約検索のsqlとphp処理
    $sql=$pdo->prepare('select * from Reservation where user_id=?');
    $sql->execute([$id]);

    foreach ($sql as $row) {
        echo'<br>';
        echo'<br>';
        echo'<p>',$row['merchandise_id'],'</p>';
        echo'<br>';
        echo'<br>';
    }
    
        

?>

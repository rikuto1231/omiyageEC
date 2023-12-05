<?php
    require 'DB.php';
    $pdo = getDatabaseConnection(); 
    // 予約検索のsqlとphp処理
    $sql=$pdo->prepare('select*
    from Reservation,Merchandise
    where  Reservation.Merchandise_id=Merchandise.Merchandise_id
    and user_id=?');
    $sql->execute([$id]);

    foreach($sql  as $row){
        echo'<img src="../../common/img/'.$row['path'].'" width="90px" height="90px" class="img_product">';
        echo'<p>',$row['merchandise_name'],'</p>';
        echo'<p>￥',$row['price'],'</p>';
        echo'<p>数量：',$row['number'],'</p>';
        echo'<p>',$row['date'],'</p>';
        echo'<br>';
        echo'<br>';
    }
        

?>

<?php
    require 'DB.php';
    $pdo = getDatabaseConnection(); 
    // 予約検索のsqlとphp処理
    $sql=$pdo->prepare('select * from Reservation where user_id=?');
    $sql->execute([$id]);
    foreach ($sql as $row) {
        $number = $row['number'];
        $date = $row['date'];
        $sql=$pdo->prepare('select * from Merchandise where Merchandise_id=?');
        $sql->execute([$row['merchandise_id']]);
        foreach ($sql as $row) {
            echo'<img src="../../common/img/'.$row['path'].'" width="90px" height="90px" class="img_product">';
            echo'<p>',$row['merchandise_name'],'</p>';
            echo'<p>￥',$row['price'],'</p>';
            echo'<p>数量：',$number,'</p>';
            echo'<p>',$date,'</p>';
        }
        echo'<br>';
        echo'<br>';
    }
    $sql=$pdo->prepare('select*
    from reservation,Merchandise
    where  reservation.Merchandise_id=Merchandise.Merchandise_id
    and user_id=?');
    $sql->execute([$id]);

    foreach($sql  as $row){
        
        echo '<p>￥',$row['price'],'</p>';
        echo '<p>',$row['cart_id'],'</p>';
        echo '<p>',$row['purpose_date'],'</p>';
        echo '<p>数量：',$row['quantity'],'</p>';
    }
        

?>

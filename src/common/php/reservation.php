<?php
    require 'DB.php';
    $pdo = getDatabaseConnection(); 
    // 予約検索のsqlとphp処理

    $sql=$pdo->prepare('select*
    from Reservation,Merchandise
    where  Reservation.Merchandise_id=Merchandise.Merchandise_id
    and user_id=?');
    $sql->execute([$id]);
    echo'<form action="reservation_delete.php" method="POST">';
    echo '<input type="hidden" name="id" value="',$id,'">';
    foreach($sql  as $row){
        echo'<img src="../../common/img/'.$row['path'].'" class="img_product">';
        echo'<h4 class="a">',$row['merchandise_name'],'</h4>';
        echo'<p class="a">￥',$row['price'],'　　　　数量：',$row['number'],'</p>';
        echo '<input type="hidden" name="m_id" value="',$row['Merchandise_id'],'">';
        echo'<p><button type="submit" class="delete">取消</button>','　　　　',$row['date'],'</p>';
        echo'<br>';
        echo'<br>';
    }
    echo'</form>';
        

?>

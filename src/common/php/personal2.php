

<?php
require '../../common/php/DB.php'; 
$pdo = getDatabaseConnection();

    $sql=$pdo->prepare('');
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
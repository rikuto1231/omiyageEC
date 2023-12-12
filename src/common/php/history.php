

<?php
require '../../common/php/DB.php'; 
$pdo = getDatabaseConnection();



$sql = $pdo->prepare('SELECT DISTINCT m.merchandise_name, m.price, m.path, pd.quantity,p.purpose_date 
    FROM User u
    JOIN Purchase p ON u.user_id = p.user_id
    JOIN PurchaseDet pd ON p.purchase_id = pd.purchase_id
    JOIN Merchandise m ON pd.merchandise_id = m.merchandise_id
    WHERE u.user_id = :user_id');


        $sql->bindParam(':user_id', $_SESSION['user_id'], PDO::PARAM_INT);

    
        $sql->execute();

    foreach($sql  as $row){
        echo'<img src="../../common/img/'.$row['path'].'" width="90px" height="90px" class="img_product">';
        echo '<p>',$row['merchandise_name'],'</p>';
        echo '<p>￥',$row['price'],'</p>';
        echo '<p>',$row['purpose_date'],'</p>';
        echo '<p>数量：',$row['quantity'],'</p>';
        echo "<br><br>";
    }
    

?>


<?php
require '../../common/php/DB.php'; 
$pdo = getDatabaseConnection();
$sql=$pdo->prepare('select DISTINCT category from Merchandise ');


    

    if ($sql > 0) {
        while($sql = $result->fetch_assoc()) {
            echo "<option value='". $row['category'] ."'>". $row['category'] ."</option>";
        }
    }

?>


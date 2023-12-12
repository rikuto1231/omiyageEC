

<?php
require '../../common/php/DB.php'; 
$pdo = getDatabaseConnection();
$sql=$pdo->prepare('select DISTINCT category from Merchandise ');


    

while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
    $options .= "<option value='". $row['category'] ."'>". $row['category'] ."</option>";
}

?>


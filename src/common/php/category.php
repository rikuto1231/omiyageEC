

<?php
require '../../common/php/DB.php'; 
$pdo = getDatabaseConnection();
$sql=$pdo->prepare('select DISTINCT category from Merchandise ');

$sql->execute();

$options = '';
    

while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
    $options .= "<option value='". $row['category'] ."'>". $row['category'] ."</option>";
}

?>


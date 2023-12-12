

<?php
require '../../common/php/DB.php'; 
$pdo = getDatabaseConnection();
$sql=$pdo->prepare('select DISTINCT category from Merchandise ');

$sql->execute();

$options = '';
    

?>




<?php
require '../../common/php/DB.php'; 
$pdo = getDatabaseConnection();
$sql=$pdo->prepare('select * from Merchandise where category');

    $sql=$pdo->prepare('');
    $sql->execute([$id]);

    if ($sql->num_rows > 0) {
        while($row = $sql->fetch_assoc()) {
            echo "<option value='". $row['id'] ."'>". $row['category'] ."</option>";
        }
    }

?>
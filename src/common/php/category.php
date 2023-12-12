

<?php
require '../../common/php/DB.php'; 
$pdo = getDatabaseConnection();
$sql=$pdo->prepare('select DISTINCT category from Merchandise ');

$result = $conn->query($sql);

$conn->close();
    

    if ($sql->num_rows > 0) {
        while($row = $sql->fetch_assoc()) {
            echo "<option value='". $row['category'] ."'>". $row['category'] ."</option>";
        }
    }

?>


<?php
require '../../common/php/DB.php'; 
$pdo = getDatabaseConnection();
$sql=$pdo->prepare('select DISTINCT category from Merchandise ');

$result = $conn->query($sql);

$conn->close();
    

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<option value='". $row['category'] ."'>". $row['category'] ."</option>";
        }
    }

?>
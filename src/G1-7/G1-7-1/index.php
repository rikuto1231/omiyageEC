<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <br>
    <br>
    <br>
    <?php 
        $id = $_GET['id'];
       require '../../common/php/revue.php';
       ?>
</body>
</html>
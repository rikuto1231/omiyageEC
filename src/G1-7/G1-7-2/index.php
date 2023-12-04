<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <h3 class="title">満足度</h3>
        <p class="info"><span style="color: yellow;">★★★</span></p>
        <h3 class="title" >タイトル</h3>
        <p class="info"><input type="text" class="titel_input"></p>
        <h3 class="title">本文</h3>
        <p class="info2"><input type="text" class="titel_input"></p>
    </div>
        <button class="input">送信</button>
        <button class="back" onclick="location.href='../G1-7/G1-7-1/index.php'">もどる</button>
</body>
</html>
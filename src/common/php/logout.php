<?php 
// session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ログアウト</title>
</head>
<body>


<?php
    if(isset($_SESSION['user_id'])){
        unset($_SESSION['user_id']);
        echo 'ログアウトしました。';
    }else{
        echo 'すでにログアウトしています。';
    }
    ?>
    <button class="btn2" onclick="location.href='/omiyageEC/src/G1-2/G1-2-1/index.php'">戻る</button>

</body>
</html>
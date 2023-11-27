<!-- <?php session_start(); ?> -->

<?php
     const SERVER = 'mysql214.phy.lolipop.lan';
     const DBNAME = 'LAA1517437-shop';
     const USER = 'LAA1517437';
     const PASS = 'Pass1015';

     $dbConnection = new DatabaseConnection($host, $dbname, $user, $pass);
     return $dbConnection->getPDO(); // 接続を返す
?>
<?php

// unset($_SESSION['']);
$pdo = getDatabaseConnection(); 
$sql=$pdo->prepare('select * from User where mail_address=?');
$sql->execute([$_POST['mail_address']]);
foreach($sql as $row){

    if(password_verify($_POST['password'], $row['password'])){
    // $_SESSION['']=[

        // 'id'=>$row['id'],'name'=>$row['name'],
        'mail_address'=>$row['mail_address'], 'mail_address'=>$row['mail_address'],
        'password'=>$row['password'];

    }

}

if (isset($_SESSION[''])){
    echo'いらっしゃいませ、',$_SESSION['']['name'],'さん。';

}else{
    echo'ログイン名またはパスワードが違います。';
}

?>

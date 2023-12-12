<?php 
 require 'DB.php';


    $pdo = getDatabaseConnection(); 
    // ポイント検索のsqlとphp処理
    $sql=$pdo->prepare('select*
    from Review,User
    where  User.User_id=Review.User_id
    and Merchandise_id=?');
    $sql->execute([$id]);
    foreach($sql  as $row){
   echo'<div id="revew">';
   echo'<h2><img src="/omiyageEC/src/common/img/user.png" alt="代替テキスト"width="7%" height="14%">';
   echo$row['name_personal'];
   echo' </h2>';
   echo' <h4>',$row['post'],'</h4>';
   echo' <p><span class="star">';
   switch ($row['review_num']){
    case '1':
        echo'★';
      break;
    case '2':
        echo'★★';
      break;
    case '3':
        echo'★★★';
      break;
    case '4':
        echo'★★★★';
      break;
    case '5':
        echo'★★★★★';
      break;
    }
   echo'</span></p>';
   echo' <h2>',$row['review_title'],'</h2>';
   echo' <div id="center">';
   echo' <div id="fonts">',$row['review_text'],'</div>';
   echo' </div>';
   echo' </div>';
    }
   echo' <div id="center">';
   echo'<button class="input" onclick="',"location.href='../../G1-7/G1-7-2/index.php",'">レビュー入力</button>';
   echo' </div>';
   echo' <br>';
   echo' <div id="center">';
   echo'     <button class="back"  onclick="',"location.href='../../G1-5/G1-5-2/index.php",'">もどる</button>';
   echo' </div>';
    ?>
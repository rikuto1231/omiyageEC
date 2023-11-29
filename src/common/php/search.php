<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // GETリクエストが送信された場合の処理

    // 接続
    $pdo = getDatabaseConnection(); 

    // 情報がなかった時の代替え文字列
    $search = isset($_GET['search_box']) ? $_GET['search_box'] : '';


    $result = sql_search($pdo, $search,false,false,false);

    // return情報
    foreach ($result as $row) {
        echo '<div class="item">';
        // 商品詳細用の特定ロジックを後で構築
        if ($row['path'] == null && $row['path'] == '') {
            echo '<img src="'.'omiyageEC/src/common/img/'.'NO.jpeg'.'" alt="代替テキスト" width="90px" height="90px"'.$row['merchandise_id'].'>'; 
            echo '<p>'.$row['merchandise_name'].'</p>';
            echo '</div>';
            
        }else{
            echo '<img src="'.'omiyageEC/src/common/img/'.$row['path'].'" alt="代替テキスト" width="90px" height="90px"'.$row['merchandise_id'].'>'; 
            echo '<p>'.$row['merchandise_name'].'</p>';
            echo '</div>';
        }

        }
        


}

?>
<?php

// 読み込みファイル 
// 別ファイル自己遷移方式で関数呼び出し対応 get形式
// 最初は全件検索対応だけ（後で条件検索を対応させる）

// 方式あってるか後で確認

    // 接続
    $pdo = getDatabaseConnection(); 

    $search = $_GET['search_box'];

    $result = sql_search($pdo, $search);


    // return情報
    foreach ($result as $row) {
        echo '<div class="item">';
        // 商品詳細用の特定ロジックを後で構築
        echo '<img src="'.$row['path'].'" alt="代替テキスト" width="90px" height="90px"'.$row['merchandise_id'].'>'; 
        echo '<p>'.$row['merchandise_name'].'</p>';
        echo '</div>';
    }



?>
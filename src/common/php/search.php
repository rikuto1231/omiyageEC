<?php

// 読み込みファイル 
// 別ファイル自己遷移方式で関数呼び出し対応 post形式
// 最初は全件検索対応だけ（後で条件検索を対応させる）

// search_boxがformで送られる

    // 接続
    $pdo = getDatabaseConnection(); 
    $search = $_GET['search_box'];
    $result = sql_search($pdo, $search);


    
    // 出力方式
    // foreach ($result as $row) {

    // }



?>
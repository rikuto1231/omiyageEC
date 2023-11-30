<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // GETリクエストが送信された場合
    // 接続
    $pdo = getDatabaseConnection(); 
    // 情報がなかった時の代替え文字列
    $search = isset($_GET['search_box']) ? $_GET['search_box'] : '';
    $result = sql_search($pdo, $search,false,false,false);
    // return情報
    foreach ($result as $row) {
        echo '<div class="item">';
        // 商品詳細用の特定ロジックを後で構築
        // || !file_exists('/omiyageEC/src/common/img/'.$row['path'])
        if ($row['path'] == null || $row['path'] == '' ) { //パスがnullの時と空白の時と有効じゃないとき
            echo '<a href="/omiyageEC/src/G1-5/G1-5-3/index.php?merchandise_id=' . $row['merchandise_id'] . '">';
            echo '<img src="'.'/omiyageEC/src/common/img/'.'NO.jpeg'.'" alt="代替テキスト" width="90px" height="90px"'.$row['merchandise_id'].'>'; 
            echo !file_exists('/omiyageEC/src/common/img/'.$row['path']);
            echo '</a>';
            echo '<p>'.$row['merchandise_name'].'</p>';
            echo '</div>';
            
        }else{
            // 現時点だと全てBで処理されている DBデータの確認と有効パスの判断
            echo '<a href="/omiyageEC/src/G1-5/G1-5-3/index.php?merchandise_id=' . $row['merchandise_id'] . '">';
            echo '<img src="'.'/omiyageEC/src/common/img/'.$row['path'].'" alt="代替テキスト" width="90px" height="90px"'.$row['merchandise_id'].'>'; 
            echo '</a>';
            echo '<p>'.$row['merchandise_name'].'</p>';
            echo '</div>';
        }
        }
        
}
?>
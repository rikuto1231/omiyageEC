<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // GETリクエストが送信された場合
    // 接続
    $pdo = getDatabaseConnection(); 
    // 情報がなかった時の代替え文字列
    $search = isset($_GET['search_box']) ? $_GET['search_box'] : '';

    // 詳細検索ではないときの付加処理
    $category = isset($_GET['category']) ? $_GET['category'] : false;
    $priceRange = isset($_GET['priceRange']) ? $_GET['priceRange'] : false;
    $prefecture = isset($_GET['prefecture']) ? $_GET['prefecture'] : false;
    
    // 詳細未選択の場合はfalseに変更
    $category = ($category === '0') ? false : $category;
    $priceRange = ($priceRange === '0') ? false : $priceRange;
    $prefecture = ($prefecture === '0') ? false : $prefecture;
    

    $result = sql_search($pdo, $search, $category, $priceRange, $prefecture);
    // return情報
    foreach ($result as $row) {
        echo '<div class="item">';
        $imagePath = "/omiyageEC/src/common/img/" . $row['path'];
        
        // パスがnullまたは空白の場合
        if ($row['path'] == null || $row['path'] == '') {
            echo '<a href="/omiyageEC/src/G1-5/G1-5-3/index.php?merchandise_id=' . $row['merchandise_id'] . '">';
            echo '<img src="' . '/omiyageEC/src/common/img/no.jpeg' . '" alt="画像がありません" width="90px" height="90px" ' . $row['merchandise_id'] . '>';
            echo '</a>';
            echo '<p>' . $row['merchandise_name'] . '</p>';
        }else {
            echo '<a href="/omiyageEC/src/G1-5/G1-5-3/index.php?merchandise_id=' . $row['merchandise_id'] . '">';
            echo '<img src="' . '/omiyageEC/src/common/img/' . $row['path'] . '" alt="画像がありません" width="90px" height="90px" ' . $row['merchandise_id'] . '>';
            echo '</a>';
            echo '<p>' . $row['merchandise_name'] . '</p>';
        }

        // } 
    
        echo '</div>';
    }
    
        
}
?>
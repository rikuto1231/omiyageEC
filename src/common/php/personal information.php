<!--個人情報検索-->
<?php
require 'DB.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // データベースへの接続を取得
    $pdo = getDatabaseConnection();

    try {
        // データベースからユーザーの個人情報を取得
        $stmt = $pdo->prepare('SELECT * FROM User WHERE user_id = :user_id');
        $stmt->bindParam(':user_id', $_SESSION['user_id']);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($result) {
    $personal_family = $result['name_family'];//姓
    $personal_personal=$result['name_personal'];//名
    $personal_post=$result['post_code'];//郵便番号
    $personal_prefectures=$result['prefectures'];//都道府県
    $personal_city=$result['city_address'];//市区町村
    $personal_street=$result['street_address'];//番地
    $personal_buliding=$result['building'];//建物名・部屋番号
    

    echo '<table class="table-container">';
        echo '<tr><td align="right">お名前</td><td class="table-cell">'.$personal_family.'　'.$personal_personal.'</td><td>　　　　</td></tr>';
        echo '<tr><td align="right">郵便番号</td><td class="table-cell">'.$personal_post.'</td><td>　　　　</td></tr>';
        echo '<tr><td align="right">都道府県名</td><td class="table-cell">'.$personal_prefectures.'</td><td>　　　　</td></tr>';
        echo '<tr><td align="right">市区町村</td><td class="table-cell">'.$personal_city.'</td>　　　　<td></td></tr>';
        echo '<tr><td align="right">番地</td><td class="table-cell">'.$personal_street.'</td><td></td>　　　　</tr>';
        echo '<tr><td align="right">建物名:</td><td class="table-cell">'.$personal_buliding.'</td><td></td>　　　　</tr>';
        echo '</table>';
    } else {
    // ユーザーが見つからなかった場合の処理
    echo '情報が見つかりませんでした';
    }
    } catch (PDOException $e) {
        die("データベースエラー: " . $e->getMessage());
    }
}
?>

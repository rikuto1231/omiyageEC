<!-- カート追加する処理, detail.php呼び出し元G1-5-3からの読み込み -->
<?php
session_start();

require 'DB.php';
?>

<?php 


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pdo = getDatabaseConnection(); 

    // 商品IDを受け取る
    $merchandise_id = isset($_POST['merchandise_id']) ? $_POST['merchandise_id'] : null;

    if ($merchandise_id !== null) {

        // 隠しフィールドの商品情報を取得
        // SESSIONのuser_idが命名あってるか後で確認
        $user_id = $_SESSION['user_id'];

        // ユーザが選んだ商品数
        $quantity = $_POST[''];


        // カートにアイテムを追加(引数を対応させる)
        $cartInsertResult = insertCartItem($pdo, $user_id, $merchandise_id. $quantity);

        if ($cartInsertResult) {
            // カートへの追加が成功した場合の処理
            header("Location: 有効URLに変更"); // カートページにリダイレクト
            exit();
        } else {
            // カートへの追加が失敗した場合の処理
            echo '商品の追加に失敗しました。';
        }
    } else {
        // 商品IDが指定されていない
        echo '<p>商品IDが指定されていません。</p>';
    }
}


?>


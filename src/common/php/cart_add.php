<!-- カート追加する処理, detail.php呼び出し元G1-5-3からの読み込み -->
<?php


// GETかPOSTか選定する
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $pdo = getDatabaseConnection(); 

    // 商品IDを受け取る
    $merchandise_id = isset($_GET['merchandise_id']) ? $_GET['merchandise_id'] : null;

    if ($merchandise_id !== null) {
        // 商品情報を取得
        $result = sql_search_id($pdo, $merchandise_id);

        if ($result && count($result) > 0) {
            $row = $result[0]; // 最初の行
        } else {
            // 商品情報が見つからない
            echo '<p>指定された商品は見つかりません。</p>';
            return;
        }

        // カートにアイテムを追加する
        $cartInsertResult = insertCartItem($pdo, $merchandise_id);

        if ($cartInsertResult) {
            // カートへの追加が成功した場合の処理
            header("Location: cart.php"); // カートページにリダイレクト
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

function insertCartItem($pdo, $merchandise_id) {
    try {
        // カートにアイテムを追加するSQL文
        $sql = "INSERT INTO Cart (user_id, merchandise_id, quantity) VALUES (:user_id, :merchandise_id, 1)";

        // 仮でユーザIDを1としています。実際にはログインユーザのIDを使用するなど、適切に取得してください。
        $user_id = 1;

        // プリペアドステートメントを作成
        $stmt = $pdo->prepare($sql);

        // パラメータをバインド
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->bindParam(':merchandise_id', $merchandise_id, PDO::PARAM_INT);

        // クエリの実行
        $result = $stmt->execute();

        return $result;
    } catch (PDOException $e) {
        // エラーハンドリング
        echo "エラー: " . $e->getMessage();
        return false;
    }
}
?>


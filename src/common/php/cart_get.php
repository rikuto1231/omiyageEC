<?php


require 'DB.php';

// ユーザIDの確認
if (isset($_SESSION['user_id'])) {
    // ユーザIDを取得
    $user_id = $_SESSION['user_id'];

    $pdo = getDatabaseConnection();  

    // カートの中にユーザの商品が入っているかチェック
    $checkCartQuery = "SELECT * FROM Cart WHERE user_id = :user_id AND purchased = 0";

    $checkCartStmt = $pdo->prepare($checkCartQuery);
    $checkCartStmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $checkCartStmt->execute();

    // 結果を受け取る
    $products = $checkCartStmt->fetchAll(PDO::FETCH_ASSOC);
    echo "AAAAAAAAAAAAA";

    // カートに商品が入っている場合
    if ($products) {
        foreach ($products as $product) {
            echo "BBBBBBBBBBB";
            echo '<div class="product">';
            echo '<p id="cart_mess">カートに入っているアイテム</p>';
            echo '<img class="img_product" src="/omiyageEC/src/common/img/cart.jpg" width="100" height="100">';
            echo '<div class="in_cart">';
            echo '<h5>商品名: ' . $product['name'] . '</h5>';
            echo '<h5><select name="number">';
            for ($i = 1; $i <= 10; $i++) {
                echo '<option value="' . $i . '">' . $i . '</option>';
            }
            echo '</select></h5>';
            echo '<h5>￥値段<button class="delete_button">削除</button></h5>';
            echo '</div>';
            echo '<button class="button_next" onclick="location.href=\'../../G1-5/G1-5-2/index.php\'">ショッピングを続ける</button>';
            echo '</div>';
        }

    } else {
    echo "A";
    }
} else {
    // ユーザIDがセッションに保存されていない場合（未ログインなど）
    header('Location: ユーザIDがセッションに保存されていない場合の遷移先'); // 遷移先のURLを指定
    exit();
}
?>

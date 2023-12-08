<?php

// ユーザIDの確認
if (isset($_SESSION['user_id'])) {
    // ユーザIDを取得
    $user_id = $_SESSION['user_id'];

    $pdo = getDatabaseConnection();  

    // カートの中にユーザの商品が入っているかチェック
    $checkCartQuery = "SELECT c.*, m.merchandise_name, m.path, m.price, m.stock FROM Cart c
                        JOIN Merchandise m ON c.merchandise_id = m.merchandise_id
                        WHERE c.user_id = :user_id AND c.purchased = 0";

    $checkCartStmt = $pdo->prepare($checkCartQuery);
    $checkCartStmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $checkCartStmt->execute();

    // 結果を受け取る
    $products = $checkCartStmt->fetchAll(PDO::FETCH_ASSOC);

    // カートに商品が入っている場合
    if ($products) {
        $subtotal = 0; // 小計初期化

        foreach ($products as $product) {
            echo '<div class="product">';
            echo '<img class="img_product" src="/omiyageEC/src/common/img/' . $product['path'] . '" width="100" height="100">';
            echo '<div class="in_cart">';
            echo '<h5>商品名: ' . $product['merchandise_name'] . '</h5>';
            echo '<h5>価格: ¥' . number_format($product['price']) . '</h5>';
            echo '<h5><select name="number">';
            for ($i = 1; $i <= $product['stock']; $i++) {
                echo '<option value="' . $i . '">' . $i . '</option>';
            }
            echo '</select></h5>';
            
            // 商品削除のフォーム
            echo '<form method="post" action="/omiyageEC/src/common/php/deleteCartItem.php">';
            echo '<input type="hidden" name="cart_id" value="' . $product['cart_id'] . '">';
            echo '<button type="submit" class="delete_button">削除</button>';
            echo '</form>';

            // 小計を更新
            $subtotal += $product['price'] * $product['quantity'];
            
            echo '</div>';
            echo '</div>';

        }

        // 付与ポイントの計算
        $rewardPoints = floor($subtotal / 100);

        // 合計金額の計算（送料を追加）
        $totalAmount = $subtotal + 300;



        echo '<form action="/omiyageEC/src/common/php/purchaseCart.php" method="post">';
        echo '<div id="num_output">';
        echo '<h4>付与ポイント: ' . $rewardPoints . ' ポイント</h4>';
        echo '<p>小計（税込）: ¥' . number_format($subtotal) . '</p>';
        echo '<hr>';
        echo '<p>送料(税込): ¥300</p>';
        echo '<hr>';
        echo '<h4>合計(税込): ¥' . number_format($totalAmount) . '</h4>';
        echo '<button type="submit" class="button_reg" name="purchase">ご購入手続き</button>';
        echo '</div>';
        echo '</form>';
        
    } else {
        echo "A";
    }
} else {
    // ユーザIDがセッションに保存されていない場合（未ログインなど）
    header('Location: ユーザIDがセッションに保存されていない場合の遷移先'); // 遷移先のURLを指定
    exit();
}
?>

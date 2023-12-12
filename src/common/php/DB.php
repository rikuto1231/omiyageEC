<?php

class DatabaseConnection {
    private $host; // データベースサーバーのホスト名
    private $dbname; // 使用するデータベース名
    private $user; // データベースのユーザー名
    private $pass; // データベースのパスワード
    private $pdo; // PDOオブジェクト

    private $charset;

    public function __construct($host, $dbname, $user, $pass, $charset = 'utf8') {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->pass = $pass;
        $this->charset = $charset;
    }

    public function connect() {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname . ';charset=' . $this->charset;
        try {
            $this->pdo = new PDO($dsn, $this->user, $this->pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('接続エラー: ' . $e->getMessage());
        }
    }

    public function getPDO() {
        if ($this->pdo === null) {
            $this->connect();
        }
        return $this->pdo;
    }
}

// WebAPI用の関数

function getDatabaseConnection() {
    // 環境に合わせて後々変更予定
    $host = 'mysql216.phy.lolipop.lan';
    $dbname = 'LAA1517424-aso2201216';
    $user = 'LAA1517424';
    $pass = 'Pass0407';

    $dbConnection = new DatabaseConnection($host, $dbname, $user, $pass);
    return $dbConnection->getPDO(); // 接続を返す
}



// 商品検索用API（引数複数対応にしたい）
function sql_search($pdo, $search, $selectedCategories, $selectedPriceRanges, $selectedPrefectures) {
    try {
        $searchPattern = "%" . $search . "%"; 

        // JSの配列がID形式にしてあるからname形式への変更が必要

        // デフォルトのsql文
        $sql = 'SELECT * FROM Merchandise WHERE merchandise_name LIKE :search';

        // カテゴリが選択
        if (!empty($selectedCategories)) {
            $categoryConditions = array_fill(0, count($selectedCategories), 'category = ?');
            $sql .= ' AND (' . implode(' OR ', $categoryConditions) . ')';
        }

        // 価格帯が選択
        if (!empty($selectedPriceRanges)) {
            $priceRangeConditions = array_fill(0, count($selectedPriceRanges), 'price = ?');
            $sql .= ' AND (' . implode(' OR ', $priceRangeConditions) . ')';
        }

        // 都道府県が選択
        if (!empty($selectedPrefectures)) {
            $prefectureConditions = array_fill(0, count($selectedPrefectures), 'prefecture = ?');
            $sql .= ' AND (' . implode(' OR ', $prefectureConditions) . ')';
        }

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':search', $searchPattern, PDO::PARAM_STR);

        $paramIndex = 1;

        if (!empty($selectedCategories)) {
            foreach ($selectedCategories as $categoryId) {
                $stmt->bindParam($paramIndex++, $categoryId, PDO::PARAM_INT);
            }
        }

        if (!empty($selectedPriceRanges)) {
            foreach ($selectedPriceRanges as $priceRangeId) {
                $stmt->bindParam($paramIndex++, $priceRangeId, PDO::PARAM_INT);
            }
        }

        if (!empty($selectedPrefectures)) {
            foreach ($selectedPrefectures as $prefectureId) {
                $stmt->bindParam($paramIndex++, $prefectureId, PDO::PARAM_INT);
            }
        }

        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;

    } catch (PDOException $e) {
        // エラーハンドリング
        echo "エラー: " . $e->getMessage();
        return false;
    }
}

// 商品検索用API（ID指定）
function sql_search_id($pdo, $id) {
    try {
        $sql = 'SELECT * FROM Merchandise WHERE merchandise_id = :id';
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } catch (PDOException $e) {
        // エラーハンドリング
        echo "エラー: " . $e->getMessage();
        return false;
    }
}

// 商品カート追加API
function insertCartItem($pdo, $user_id, $merchandise_id,$quantity) {
    try {
        // カートにアイテムを追加するSQL文
        // 数量が固定なので後々対応が必要
        $sql = "INSERT INTO Cart (user_id, merchandise_id, quantity,purchased) VALUES (:user_id, :merchandise_id, :quantity,0)";

        // プリペアドステートメントを作成
        $stmt = $pdo->prepare($sql);

        // パラメータをバインド
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->bindParam(':merchandise_id', $merchandise_id, PDO::PARAM_INT);
        $stmt->bindParam(':quantity', $quantity, PDO::PARAM_INT);

        // クエリの実行
        $result = $stmt->execute();

        return $result;
    } catch (PDOException $e) {
        // エラーハンドリング
        echo "エラー: " . $e->getMessage();
        return false;
    }
}

// 商品予約追加API
function insertReservation($pdo, $user_id, $merchandise_id, $number) {
    try {
        // 予約情報を挿入するSQL文
        $sql = "INSERT INTO Reservation (user_id, merchandise_id, number) VALUES (:userId, :merchandiseId, :number)";
        
        // SQLステートメントを準備
        $stmt = $pdo->prepare($sql);

        // パラメータをバインド
        $stmt->bindParam(':userId', $user_id, PDO::PARAM_INT);
        $stmt->bindParam(':merchandiseId', $merchandise_id, PDO::PARAM_INT);
        $stmt->bindParam(':number', $number, PDO::PARAM_INT);

        // SQLを実行
        $stmt->execute();

        // 予約IDを取得のデフォルト関数
        $reservationId = $pdo->lastInsertId();

        return $reservationId;
    } catch (PDOException $e) {
        // エラー処理（適切に処理してください）
        echo "予約情報の挿入に失敗しました：" . $e->getMessage();
        return false;
    }
}

// カートアイテム削除API
function deleteCartItem($pdo, $cart_id) {
    try {
        // カートからアイテムを削除するSQL文
        $sql = "DELETE FROM Cart WHERE cart_id = :cart_id";

        $stmt = $pdo->prepare($sql);

    
        $stmt->bindParam(':cart_id', $cart_id, PDO::PARAM_INT);

        // クエリの実行
        $result = $stmt->execute();

        return $result;
    } catch (PDOException $e) {
        // エラーハンドリング
        echo "エラー: " . $e->getMessage();
        return false;
    }
}

// 購入テーブル追加
function insertPurchase($pdo, $user_id, $cart_id, $purpose_date) {
    try {
        // 購入情報を挿入するSQL文
        $sql = "INSERT INTO Purchase (user_id, cart_id, purpose_date) VALUES (:userId, :cartId, :purposeDate)";
        
        // SQLステートメントを準備
        $stmt = $pdo->prepare($sql);

        // パラメータをバインド
        $stmt->bindParam(':userId', $user_id, PDO::PARAM_INT);
        $stmt->bindParam(':cartId', $cart_id, PDO::PARAM_INT);
        $stmt->bindParam(':purposeDate', $purpose_date, PDO::PARAM_STR);

        // SQLを実行
        $stmt->execute();

        // 購入IDを取得のデフォルト関数
        $purchaseId = $pdo->lastInsertId();

        return $purchaseId;
    } catch (PDOException $e) {
        // エラー処理（適切に処理してください）
        echo "購入情報の挿入に失敗しました：" . $e->getMessage();
        return false;
    }
}

// 購入詳細追加
function insertPurchaseDetail($pdo, $purchaseId, $merchandiseId, $quantity) {
    try {
        // PurchaseDetailテーブルに挿入するSQL文
        $sql = "INSERT INTO PurchaseDetail (purchase_id, merchandise_id, quantity) VALUES (:purchaseId, :merchandiseId, :quantity)";
        
        // SQLステートメントを準備
        $stmt = $pdo->prepare($sql);

        // パラメータをバインド
        $stmt->bindParam(':purchaseId', $purchaseId, PDO::PARAM_INT);
        $stmt->bindParam(':merchandiseId', $merchandiseId, PDO::PARAM_INT);
        $stmt->bindParam(':quantity', $quantity, PDO::PARAM_INT);

        // SQLを実行
        $stmt->execute();

        // 成功した場合はtrueを返す
        return true;
    } catch (PDOException $e) {
        // エラー処理（適切に処理してください）
        echo "購入詳細情報の挿入に失敗しました：" . $e->getMessage();
        return false;
    }
}


function CartAsPurchased($pdo, $cartId) {
    try {
        // 購入済みフラグを立てるSQL文
        $sql = "UPDATE Cart SET purchased = 1 WHERE cart_id = :cartId";
        
        // SQLステートメントを準備
        $stmt = $pdo->prepare($sql);

        // パラメータをバインド
        $stmt->bindParam(':cartId', $cartId, PDO::PARAM_INT);

        // SQLを実行
        $stmt->execute();

        // 成功した場合はtrueを返す
        return true;
    } catch (PDOException $e) {
        // エラー処理（適切に処理してください）
        echo "カートの更新に失敗しました：" . $e->getMessage();
        return false;
    }
}







 //DB接続関数

// $pdo = getDatabaseConnection(); 

?>

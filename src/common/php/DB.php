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
function insertCartItem($pdo, $user_id, $merchandise_id) {
    try {
        // カートにアイテムを追加するSQL文
        // 数量が固定なので後々対応が必要
        $sql = "INSERT INTO Cart (user_id, merchandise_id, quantity) VALUES (:user_id, :merchandise_id, 1,0)";

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



 //DB接続関数

// $pdo = getDatabaseConnection(); 

?>

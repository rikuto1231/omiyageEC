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
    $host = 'mysql214.phy.lolipop.lan';
    $dbname = 'LAA1517437-shop';
    $user = 'LAA1517437';
    $pass = 'Pass1015';

    $dbConnection = new DatabaseConnection($host, $dbname, $user, $pass);
    return $dbConnection->getPDO(); // 接続を返す
}

// 商品検索用API
function sql_search($pdo, $search) {
    try {
        $searchPattern = "%" . $search . "%"; 
        $stmt = $pdo->prepare('SELECT * FROM item WHERE name LIKE :search');
        $stmt->bindParam(':search', $searchPattern, PDO::PARAM_STR);

        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
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

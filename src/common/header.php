<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require 'php/DB.php'; ?>
    <!-- 共通header.cssとは読み出し元が繋げる-->

    <!-- 現在は確認用に繋げておく -->
</head>
<body>
    <header id="header">
        <!-- header内の必要要素を入れる -->
        <!-- 遷移を可能にしておく -->
        <img src="">
        <img src="">

        <p>ロゴ部分（未完成）</p>



        <form method="get" action="">
            <p>商品検索<input type="text" name="header_search" value="">
                <button type="submit">送信</button>
            </p>
            
        </form>

        <!-- 呼び出し元での処理に必要になるので追加と変更が必須↓ -->

        <!-- $pdo = getDatabaseConnection(); 
            $search = $_GET['search'];
            $result = sql_search($pdo, $search);
            

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" .$row['id'] . "</td>";
                echo '<td><a href="detail.php?id='.$row['id'].'">'.$row['name'].'</a></td>';
                echo "<td>" .$row['kubun'].  "</td>";
                echo "<td>" .$row['price'].  "</td>";
                echo "</tr>";
            }
            echo '</table>';
        } -->


    </header>
</body>
</html>
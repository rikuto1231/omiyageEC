<?php session_start();
?>
<?php
require '../../common/php/DB.php'; 
$pdo = getDatabaseConnection();
$sql=$pdo->prepare('select * from User where user_id=?');
    $sql->execute([$id]);?>
<!-- ユーザデータ表示とupdate処理追加する11/23 -->
<!-- セッションでの上書き処理も追加する12/04 -->

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録情報画面</title>
</head>
<body>
<?php
        echo '<h1 id="title_name">登録情報</h1>';

        echo'<form action="personal2.php" method="get">';

                
                // <!-- お名前 -->
        echo '<div class="form-group">';
        echo '<label for="lastName">姓</label>';
                //    <!-- テキスト位置調整用にid入れてます -->
        echo '<label for="firstName" id="firstName_title">名</label><br>' ;           

        echo '<input type="text" id="lastName" name="lastName" class="form-control" value= ',$row['name_family'],'>';           
        echo '<input type="text" id="firstName" name="firstName" class="form-control" value= ',$row['name_personal'],'>';
        echo '</div>';


                // <!-- フリガナ -->
        echo '<div class="form-group">'
        echo '<label for="furiganaLastName">姓（フリガナ）</label>';          
        echo '<label for="furiganaLastName" id="furiganaLastName_title">名（フリガナ）</label><br>';            
        echo '<input type="text" id="furiganaLastName" name="furiganaLastName" class="form-control" value=',$row['name_family_kana'],'>';          
        echo '<input type="text" id="furiganaFirstName" name="furiganaFirstName" class="form-control" value=',$row['name_personal_kana'],'>';
        echo '</div>';

                // <!-- 郵便番号（Ajaxで住所検索) -->
        echo '<div class="form-group">';      
        echo '<label for="postalCode">郵便番号:</label>';            
        echo '<input type="text" id="postalCode" name="postalCode" class="form-control" value=',$row['post_code'],'>';        
                    // <!-- ここに郵便番号検索フォーム（Ajax使用）を配置 -->
                    
        echo '</div>';
        
                // <!-- 住所（都道府県） -->
                // <!-- 修正 -->
        echo '<div class="form-group">';
        echo '<label for="prefecture">都道府県:</label>';
        echo '<input type="text" id="postalCode" name="postalCode" class="form-control" value=',$row['prefecture'],'>';
                        
        echo '</select>';
        echo '</div>';


                // <!-- 住所（市区町村） -->
        echo '<div class="form-group">';
        echo '<label for="city">住所（市区町村）:</label>';
        echo '<input type="text" id="city" name="city" class="form-control" value=',$row['city_addres'],'>';
        echo '</div>';

                <!-- 住所（番地） -->
                <div class="form-group">
                    <label for="street">住所（番地）:</label>
                    <input type="text" id="street" name="street" class="form-control" value="<?php echo isset($_SESSION['street']) ? htmlspecialchars($_SESSION['street']) : ''; ?>" required>
                </div>

                <!-- 住所（建物名・部屋番号） -->
                <div class="form-group">
                    <label for="building">住所（建物名・部屋番号）:</label>
                    <input type="text" id="building" name="building" class="form-control" value="<?php echo isset($_SESSION['building']) ? htmlspecialchars($_SESSION['building']) : ''; ?>">
                </div>

                <!-- 電話番号 -->
                <div class="form-group">
                    <label for="phoneNumber">電話番号:</label>
                    <input type="text" id="phoneNumber" name="phoneNumber" class="form-control" value="<?php echo isset($_SESSION['phoneNumber']) ? htmlspecialchars($_SESSION['phoneNumber']) : ''; ?>" required>
                </div>

                <!-- メールアドレス -->
                <div class="form-group">
                    <label for="email">メールアドレス:</label>
                    <input type="text" id="email" name="email" class="form-control" value="<?php echo isset($_SESSION['email']) ? htmlspecialchars($_SESSION['email']) : ''; ?>" required>
                </div>
            </form>
            <p id="output"></p>
            <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
            <script src="script.js"></script>

        <div>
            <form action="">
            <button class="henko">変更</button>
            </form>
            <br>
            <button class="modoru" onclick="location.href="/omiyageEC/src/G1-1/G1-1/index.php"">マイページに戻る</button>
        </div>
        ?>
</body>
</html>
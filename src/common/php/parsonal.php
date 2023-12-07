
<?php 
require '../../common/php/DB.php'; 
$pdo = getDatabaseConnection();
$sql=$pdo->prepare('select * from User where user_id=?');

    $sql->execute([$id]);
?>

<?php
echo'<form action="/omiyageEC/src/common/php/personal_update.php" method="POST">';
        // <!-- お名前 -->
        foreach($sql  as $row){
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['personal_family'] = $row['name_family'];//姓
            $_SESSION['personal_family_kana'] = $row['name_family_kana'];//姓(カナ)
            $_SESSION['personal_personal']=$row['name_personal'];//名
            $_SESSION['personal_personal_kana']=$row['name_personal_kana'];//名(カナ)
            $_SESSION['personal_post']=$row['post_code'];//郵便番号
            $_SESSION['personal_prefectures']=$row['prefecture'];//都道府県
            $_SESSION['personal_city']=$row['city_address'];//市区町村
            $_SESSION['personal_street']=$row['street_address'];//番地
            $_SESSION['personal_buliding']=$row['building'];//建物名・部屋番号
            $_SESSION['personal_tel']=$row['tel'];//電話番号
            $_SESSION['personal_mail_address']=$row['mail_address'];
        echo '<div class="form-group">';
        echo '<label for="lastName">姓</label>';
                //    <!-- テキスト位置調整用にid入れてます -->
        echo '<label for="firstName" id="firstName_title">名</label><br>' ;           
        echo '<input type="text" id="lastName" name="lastName" class="form-control" value=',$_SESSION['personal_family'],'>';         
        echo '<input type="text" id="firstName" name="firstName" class="form-control" value=',$_SESSION['personal_personal'],'>';
        echo '</div>';


                // <!-- フリガナ -->
        echo '<div class="form-group">';
        echo '<label for="furiganaLastName">姓（フリガナ）</label>';          
        echo '<label for="furiganaLastName" id="furiganaLastName_title">名（フリガナ）</label><br>';            
        echo '<input type="text" id="furiganaLastName" name="furiganaLastName" class="form-control" value=',$_SESSION['personal_family_kana'],'>';          
        echo '<input type="text" id="furiganaFirstName" name="furiganaFirstName" class="form-control" value=',$_SESSION['personal_personal_kana'],'>';
        echo '</div>';

                // <!-- 郵便番号（Ajaxで住所検索) -->
        echo '<div class="form-group">';      
        echo '<label for="postalCode">郵便番号:</label>';            
        echo '<input type="text" id="postalCode" name="postalCode" class="form-control" value=',$_SESSION['personal_post'],'>';        
                    // <!-- ここに郵便番号検索フォーム（Ajax使用）を配置 -->
                    
        echo '</div>';
        
                // <!-- 住所（都道府県） -->
                // <!-- 修正 -->
        echo '<div class="form-group">';
        echo '<label for="prefecture">都道府県:</label>';
        echo '<input type="text" id="postalCode" name="postalCode" class="form-control" value=',$_SESSION['personal_prefectures'],'>';
                        
        echo '</select>';
        echo '</div>';


                // <!-- 住所（市区町村） -->
        echo '<div class="form-group">';
        echo '<label for="city">住所（市区町村）:</label>';
        echo '<input type="text" id="city" name="city" class="form-control" value=',$_SESSION['personal_city'],'>';
        echo '</div>';

                // <!-- 住所（番地） -->
        echo '<div class="form-group">';
        echo '<label for="street">住所（番地）:</label>';
        echo '<input type="text" id="street" name="street" class="form-control" value=',$_SESSION['personal_street'],'>';
        echo '</div>';

                // <!-- 住所（建物名・部屋番号） -->
        echo '<div class="form-group">';
        echo '<label for="building">住所（建物名・部屋番号）:</label>';
        echo '<input type="text" id="building" name="buliding" class="form-control" value=',$_SESSION['personal_buliding'],'>';
        echo '</div>';

                // <!-- 電話番号 -->
        echo '<div class="form-group">';
        echo '<label for="phoneNumber">電話番号:</label>';
        echo '<input type="text" id="phoneNumber" name="phoneNumber" class="form-control" value=', $_SESSION['personal_tel'],'>';
        echo '</div>';

                // <!-- メールアドレス -->
        echo '<div class="form-group">';
        echo '<label for="email">メールアドレス:</label>';
        echo '<input type="text" id="email" name="email" class="form-control" value=',$_SESSION['personal_mail_address'],'>';
        echo '</div>';
        echo '<p id="output"></p>';
        echo '<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>';
        echo '<script src="script.js"></script>';

        echo '<div>';
        echo'<button class="henko" type="submit">変更</button>';
        echo '</form>';
        }

        ?>
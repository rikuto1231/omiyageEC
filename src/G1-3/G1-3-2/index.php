<?php session_start(); ?>
<!-- ユーザデータ表示とupdate処理追加する11/23 -->
<!-- セッションでの上書き処理も追加する12/04 -->
 <!--セッションの変数名を以下に変更する必要があります。
            $_SESSION['personal_family']　姓
            $_SESSION['personal_family_kana']　姓(カナ)
            $_SESSION['personal_personal']　名
            $_SESSION['personal_personal_kana']　名(カナ)
            $_SESSION['personal_post']　郵便番号
            $_SESSION['personal_prefectures']　都道府県
            $_SESSION['personal_city']　市区町村
            $_SESSION['personal_street']　番地
            $_SESSION['personal_buliding']　建物名・部屋番号
            $_SESSION['personal_tel']　電話番号
            $_SESSION['personal_mail_address']　メールアドレス
            -->

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録情報画面</title>
</head>
<body>

        <h1 id="title_name">登録情報</h1>
       <?php $id = session_id();?> 
       <?php require '../../common/php/parsonal.php';
       ?>
        
       <?php         
                // <!-- // お名前 -->
        // echo '<div class="form-group">';
        // echo '<label for="lastName">姓</label>';
                //    <!-- テキスト位置調整用にid入れてます -->
        // echo '<label for="firstName" id="firstName_title">名</label><br>' ;           

        // echo '<input type="text" id="lastName" name="lastName" class="form-control" value= ',$row['name_family'],'>';           
        // echo '<input type="text" id="firstName" name="firstName" class="form-control" value= ',$row['name_personal'],'>';
        // echo '</div>';


                // <!-- フリガナ -->
        // echo '<div class="form-group">';
        // echo '<label for="furiganaLastName">姓（フリガナ）</label>';          
        // echo '<label for="furiganaLastName" id="furiganaLastName_title">名（フリガナ）</label><br>';            
        // echo '<input type="text" id="furiganaLastName" name="furiganaLastName" class="form-control" value=',$row['name_family_kana'],'>';          
        // echo '<input type="text" id="furiganaFirstName" name="furiganaFirstName" class="form-control" value=',$row['name_personal_kana'],'>';
        // echo '</div>';

                // <!-- 郵便番号（Ajaxで住所検索) -->
        // echo '<div class="form-group">';      
        // echo '<label for="postalCode">郵便番号:</label>';            
        // echo '<input type="text" id="postalCode" name="postalCode" class="form-control" value=',$row['post_code'],'>';        
        //             // <!-- ここに郵便番号検索フォーム（Ajax使用）を配置 -->
                    
        // echo '</div>';
        
        //         // <!-- 住所（都道府県） -->
        //         // <!-- 修正 -->
        // echo '<div class="form-group">';
        // echo '<label for="prefecture">都道府県:</label>';
        // echo '<input type="text" id="postalCode" name="postalCode" class="form-control" value=',$row['prefecture'],'>';
                        
        // echo '</select>';
        // echo '</div>';


        //         // <!-- 住所（市区町村） -->
        // echo '<div class="form-group">';
        // echo '<label for="city">住所（市区町村）:</label>';
        // echo '<input type="text" id="city" name="city" class="form-control" value=',$row['city_addres'],'>';
        // echo '</div>';

        //         // <!-- 住所（番地） -->
        // echo '<div class="form-group">';
        // echo '<label for="street">住所（番地）:</label>';
        // echo '<input type="text" id="street" name="street" class="form-control" value=',$row['street_address'],'>';
        // echo '</div>';

        //         // <!-- 住所（建物名・部屋番号） -->
        // echo '<div class="form-group">';
        // echo '<label for="building">住所（建物名・部屋番号）:</label>';
        // echo '<input type="text" id="building" name="building" class="form-control" value=',$row['building'],'>';
        // echo '</div>';

        //         // <!-- 電話番号 -->
        // echo '<div class="form-group">';
        // echo '<label for="phoneNumber">電話番号:</label>';
        // echo '<input type="text" id="phoneNumber" name="phoneNumber" class="form-control" value=',$row['tel'],'>';
        // echo '</div>';

        //         // <!-- メールアドレス -->
        // echo '<div class="form-group">';
        // echo '<label for="email">メールアドレス:</label>';
        // echo '<input type="text" id="email" name="email" class="form-control" value=',$row['mail_address'],'>';
        // echo '</div>';
        // echo '</form>';
        // echo '<p id="output"></p>';
        // echo '<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>';
        // echo '<script src="script.js"></script>';

        // echo '<div>';

        ?>

        <form action="">
        <button class="henko">変更</button>
        </form>
        <br>
        <button class="modoru" onclick="location.href="/omiyageEC/src/G1-1/G1-1/index.php"">マイページに戻る</button>
        </div>
        
</body>
</html>
<!-- ユーザデータ表示とupdate処理追加する11/23 -->
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

    <form method="post" action="../G1-3-2/index.php" id="form_all">

        
        <!-- お名前 -->
        <div class="form-group">
            <label for="lastName">姓</label>
            <!--テキスト位置調整用にid入れてます -->
            <label for="firstName" id="firstName_title">名</label><br>

            <input type="text" id="lastName" name="lastName" class="form-control" required>
            <input type="text" id="firstName" name="firstName" class="form-control" required>
        </div>

        <!-- フリガナ -->
        <div class="form-group">
            <label for="furiganaLastName">姓（フリガナ）</label>
            <label for="furiganaLastName" id="furiganaLastName_title">名（フリガナ）</label><br>
            <input type="text" id="furiganaLastName" name="furiganaLastName" class="form-control" required>
            <input type="text" id="furiganaFirstName" name="furiganaFirstName" class="form-control" required>
        </div>

        <!-- 郵便番号（Ajaxで住所検索) -->
        <div class="form-group">
            <label for="postalCode">郵便番号:</label>
            <input type="text" id="postalCode" name="postalCode" class="form-control" ref="postalCode" required>
            <!-- ここに郵便番号検索フォーム（Ajax使用）を配置 -->
            <button type="button" @click="searchAddress">住所検索</button>
        </div>

        <!-- 住所（都道府県） -->
        <div class="form-group">
            <label for="prefecture">都道府県:</label>
            <select id="prefecture" name="prefecture" class="form-control" v-model="selectedPrefecture">
                <option v-for="(prefecture, index) in prefectures" :key="index" :value="prefecture">{{ prefecture }}</option>
            </select>
        </div>


        <!-- 住所（市区町村） -->
        <div class="form-group">
            <label for="city">住所（市区町村）:</label>
            <input type="text" id="city" name="city" class="form-control" required>
        </div>

        <!-- 住所（番地） -->
        <div class="form-group">
            <label for="street">住所（番地）:</label>
            <input type="text" id="street" name="street" class="form-control" required>
        </div>

        <!-- 住所（建物名・部屋番号） -->
        <div class="form-group">
            <label for="building">住所（建物名・部屋番号）:</label>
            <input type="text" id="building" name="building" class="form-control">
        </div>

        <!-- 電話番号 -->
        <div class="form-group">
            <label for="phoneNumber">電話番号:</label>
            <input type="text" id="phoneNumber" name="phoneNumber" class="form-control" required>
        </div>

        <!-- メールアドレス -->
        <div class="form-group">
            <label for="email">メールアドレス:</label>
            <input type="text" id="email" name="email" class="form-control" required>
        </div>

        <!-- メールアドレス確認用 -->
        <div class="form-group">
            <label for="confirmEmail">メールアドレス確認:</label>
            <input type="text" id="confirmEmail" name="confirmEmail" class="form-control" required>
        </div>

        <!-- パスワード -->
        <div class="form-group">
            <label for="password">パスワード:</label>
            <input type="password" id="password" name="password" class="form-control" required>
        </div>

        <!-- パスワード確認用 -->
        <div class="form-group">
            <label for="confirmPassword">パスワード確認:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" required>
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
    <button class="modoru" onclick="location.href='../../G1-1/G1-1/index.php'">マイページに戻る</button>
</div>
</body>
</html>
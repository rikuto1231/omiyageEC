<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="app">
        <header>
            <div id="menu_all">
                <div class="container">
                    <h3>ロゴ・検索部分（後々php読み込みで追加）</h3>
                </div>
                <h2>カテゴリ</h2>
                <div class="category" v-for="category in categories" :key="category.id">
                    <input type="checkbox" :id="category.id" :name="category.id" v-model="selectedCategories" :value="category.id" />
                    <label :for="category.id">{{ category.name }}</label>
                </div>

                <h2>価格</h2>
                <div class="price" v-for="priceRange in priceRanges" :key="priceRange.id">
                    <input type="checkbox" :id="priceRange.id" :name="priceRange.id" v-model="selectedPriceRanges" :value="priceRange.id" />
                    <label :for="priceRange.id">{{ priceRange.name }}</label>
                </div>

                <h2>都道府県</h2>
                <div class="Prefecture" v-for="prefecture in prefectures" :key="prefecture.id">
                    <input type="checkbox" :id="prefecture.id" :name="prefecture.id" v-model="selectedPrefectures" :value="prefecture.id" />
                    <label :for="prefecture.id">{{ prefecture.name }}</label>
                </div>
                
                <button @click="search">検索</button>
            </div>
        </header>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="script.js"></script>
</body>
</html>


new Vue({
    el: '#app',
    data: {
        categories: [
            { id: 'suitu', name: '洋菓子・スイーツ' },
            { id: 'wagasi', name: '和菓子' },
            { id: 'otumami', name: 'おつまみ' }
        ],
        priceRanges: [
            { id: 'sen', name: '～1000円' },
            { id: 'seniti', name: '1001円～2000円' },
            { id: 'senni', name: '2001円～3000円' },
            { id: 'sensan', name: '3001円～4000円' },
            { id: 'senyon', name: '4001円～5000円' },
            { id: 'gosen', name: '5001円～' }
        ],
        prefectures: [
            { id: 'hokkaido', name: '北海道' },
            { id: 'aomori', name: '青森' },
            { id: 'akita', name: '秋田' },
            { id: 'iwate', name: '岩手' },
            // 他の都道府県を追加
        ],
        selectedCategories: [],
        selectedPriceRanges: [],
        selectedPrefectures: []
    },
    methods: {
        search() {
            // 検索処理追加は未定
        }
    }
});

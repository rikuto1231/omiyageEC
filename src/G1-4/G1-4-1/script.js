
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
            { id: 'akita', name: '岩手' },
            { id: 'iwate', name: '宮城' },
            { id: 'miyagi', name: '秋田' },
            { id: 'yamagata', name: '山形' },
            { id: 'hukusima', name: '福島' },
            { id: 'niigata', name: '茨城' },
            { id: '', name: '栃木' },
            { id: '', name: '群馬' },
            { id: '', name: '埼玉' },
            { id: '', name: '千葉' },
            { id: '', name: '東京都' },
            { id: '', name: '神奈川' },
            { id: '', name: '新潟' },
            { id: '', name: '富山' },
            { id: '', name: '石川' },
            { id: '', name: '福井' },
            { id: '', name: '栃木' },
            { id: '', name: '栃木' },
            { id: '', name: '栃木' },
            { id: '', name: '栃木' },
            { id: '', name: '栃木' },
            { id: '', name: '栃木' },
            { id: '', name: '栃木' },
            { id: '', name: '栃木' },
            { id: '', name: '栃木' },
            { id: '', name: '栃木' },
            { id: '', name: '栃木' },
            { id: '', name: '栃木' },
            { id: '', name: '栃木' },
            { id: '', name: '栃木' },
            { id: '', name: '栃木' },
            { id: '', name: '栃木' },
            { id: '', name: '栃木' },
            { id: '', name: '栃木' },
            { id: '', name: '栃木' },
            { id: '', name: '栃木' },
            { id: '', name: '栃木' },
            { id: '', name: '栃木' },
            { id: '', name: '栃木' },
            { id: '', name: '栃木' },
            { id: '', name: '栃木' },
            { id: '', name: '栃木' },
            { id: '', name: '栃木' },
            { id: '', name: '栃木' },
            { id: '', name: '栃木' },
            { id: '', name: '栃木' },
            // 他の都道府県を追加
        ],
        selectedCategories: [],
        selectedPriceRanges: [],
        selectedPrefectures: []
    },
    methods: {
        search() {
            // 選択されたカテゴリ、価格、都道府県に基づいて検索処理を実行
            // ここに検索処理を追加
        }
    }
});

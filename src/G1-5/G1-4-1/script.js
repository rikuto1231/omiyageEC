
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
            { id: '', name: '山梨' },
            { id: '', name: '長野' },
            { id: '', name: '岐阜' },
            { id: '', name: '静岡' },
            { id: '', name: '愛知' },
            { id: '', name: '三重' },
            { id: '', name: '滋賀' },
            { id: '', name: '京都' },
            { id: '', name: '大阪' },
            { id: '', name: '兵庫' },
            { id: '', name: '奈良' },
            { id: '', name: '和歌山' },
            { id: '', name: '鳥取' },
            { id: '', name: '島根' },
            { id: '', name: '岡山' },
            { id: '', name: '広島' },
            { id: '', name: '山口' },
            { id: '', name: '徳島' },
            { id: '', name: '香川' },
            { id: '', name: '愛媛' },
            { id: '', name: '高知' },
            { id: '', name: '福岡' },
            { id: '', name: '佐賀' },
            { id: '', name: '長崎' },
            { id: '', name: '熊本' },
            { id: '', name: '大分' },
            { id: '', name: '宮崎' },
            { id: '', name: '鹿児島' },
            { id: '', name: '沖縄' }
            // 他の都道府県を追加
        ],
        // name保存形式に変更
        selectedCategories: [],
        selectedPriceRanges: [],
        selectedPrefectures: []
    },
    methods: {
    }
});

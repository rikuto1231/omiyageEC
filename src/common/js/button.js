new Vue({
    el: '#app',
    data: {
        quantity: 1,
        maxStock: 1 // 初期値を1に設定
    },
    mounted() {
        // 隠しフィールドからmaxStockの初期値を取得
        let maxStockInput = document.getElementById('maxStock');
        if (maxStockInput) {
            this.maxStock = parseInt(maxStockInput.value);
        }
    },
    methods: {
        changeQuantity(amount) {
            // 数量が在庫数を超えない処理
            if (this.quantity + amount >= 1 && this.quantity + amount <= this.maxStock) {
                this.quantity += amount;
            }
        }
    },
    computed: {
        isMaxQuantity() {
            // 在庫超過時の+ボタンの非活性を制御
            return this.quantity >= this.maxStock;
        }
    }
});

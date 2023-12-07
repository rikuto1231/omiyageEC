new Vue({
    el: '#app',
    data: {
        quantity: 1
    },
    methods: {
        changeQuantity(amount) {
            this.quantity += amount;
            // 数量が0未満にしない
            if (this.quantity < 1) {
                this.quantity = 1;
            }
        },
        onSubmit() {
            // フォームの送信処理を防ぐ
        }
    }
});
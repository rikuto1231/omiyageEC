// 上部分
const app = new Vue({
    el: '#app',
    data: {
        images: ['./img/search.png', './img/cart.png', './img/prot.jpeg'],
        currentIndex: 0
    },
    methods: {
        changeSlide(direction) {
            if (direction === 1) {
                const lastImage = this.images.pop();
                this.images.unshift(lastImage);
            } else if (direction === -1) {
                const firstImage = this.images.shift();
                this.images.push(firstImage);
            }
        },
        navigateToProduct(index) {
            console.log(`Navigating to product ${index + 1}`);
            // ここで遷移のロジックを追加
        }
    }
});

// 下部分

// el分け予定

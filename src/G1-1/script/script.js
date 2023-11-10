const app = new Vue({
    el: '#app',
    data: {
        images: ['./img/prot.jpeg', './img/cart.png', './img/prot.jpeg'],
        currentIndex: 0
    },
    methods: {
        changeSlide(direction) {
            const length = this.images.length;

            if (direction === 1) {
                this.currentIndex = (this.currentIndex + 1) % length;
            } else {
                this.currentIndex = (this.currentIndex - 1 + length) % length;
            }

            const nextIndex = (this.currentIndex + 1) % length;
            const prevIndex = (this.currentIndex - 1 + length) % length;

            // 画像の順番を修正
            const temp = this.images[prevIndex];
            this.$set(this.images, prevIndex, this.images[nextIndex]);
            this.$set(this.images, nextIndex, temp);
        },
        navigateToProduct(index) {
            console.log(`Navigating to product ${index + 1}`);
            // ここで遷移のロジックを追加
        }
    },
    mounted() {
        this.$nextTick(() => {
            // コンポーネントが描画された後に実行される処理
            const slideWidth = this.$refs.slider.clientWidth;
            const initialTransform = -this.currentIndex * slideWidth;
            this.$refs.slider.style.transform = `translateX(${initialTransform}px)`;
        });
    }
});

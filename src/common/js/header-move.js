// ヘッダーの上書きを阻止
window.addEventListener("scroll", function() {
    const header = document.querySelector("header");
    if (window.scrollY > 0) {
        header.style.backgroundColor = "#fff";
    } else {
        header.style.backgroundColor = "transparent";
    }
});

// ヘッダーの表示/非表示を切り替え
const header = document.querySelector("header");
let lastScrollTop = 0;

window.addEventListener("scroll", function() {
    const st = window.pageYOffset || document.documentElement.scrollTop;

    if (st > lastScrollTop) {
        header.classList.add("hidden");
    } else {
        header.classList.remove("hidden");
    }

    lastScrollTop = st;
});

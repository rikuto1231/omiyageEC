// search(){
//     // 選択されたカテゴリ、価格、都道府県を取得
//     const selectedCategories = this.selectedCategories.join(',');
//     const selectedPriceRanges = this.selectedPriceRanges.join(',');
//     const selectedPrefectures = this.selectedPrefectures.join(',');

//     // Ajaxリクエストを作成
//     const xhr = new XMLHttpRequest();
//     xhr.open('GET', `search.php?categories=${selectedCategories}&priceRanges=${selectedPriceRanges}&prefectures=${selectedPrefectures}`, true);

//     // レスポンスが返ってきたときの処理
//     xhr.onload = () => {
//         if (xhr.status >= 200 && xhr.status < 400) {
//             // レスポンスが成功した場合の処理
//             console.log(xhr.responseText);
//         } else {
//             // エラーが発生した場合の処理
//             console.error('Request failed');
//         }
//     };

//     // リクエストを送信
//     xhr.send();
// }

// いったん保留でお願いします
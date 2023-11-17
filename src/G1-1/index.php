<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vue Image Slider</title>
    <link rel="stylesheet" href="../common/css/header.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
    <?php require '../common/php/header.php'; ?>
    </header>


    
    <div id="app">
        <div class="slider-container">
            <div class="slider" ref="slider">
                <img v-for="(image, index) in images" :key="index" :src="image" alt="画像pathが違います" @click="navigateToProduct(index)" >
            </div>
            <button class="prev-button" @click="changeSlide(-1)">◄</button>
            <button class="next-button" @click="changeSlide(1)">►</button>
        </div>
    </div>


    <div id="app2">
        <div class="slider-container2">
            <div class="slider" ref="slider">
                <img v-for="(image, index) in images" :key="index" :src="image" alt="画像pathが違います" @click="navigateToProduct(index)" >
            </div>
            <button class="prev-button" @click="changeSlide(-1)">◄</button>
            <button class="next-button" @click="changeSlide(1)">►</button>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script> 
    <script src="script/script.js"></script>
</body>
</html>

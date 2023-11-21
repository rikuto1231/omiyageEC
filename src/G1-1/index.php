<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vue Image Slider</title>
    <link rel="stylesheet" href="../common/css/header.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="main">
    <header>
        <?php require '../common/php/header.php'; ?>
    </header>
    <div>
    <div class="carousel">
  <!-- スライドのリスト -->
  <div class="contains">
    <!-- スライドを選択するためのラジオボタンリスト。 -->
    <!-- 数は増減しても構わないです。 最初は1番目を選択状態(checked)にします。-->
    <!-- Slide各ラジオボタンに個別のidを定義して、nameはすべて同じ値にします。 -->
    <input class="slide_select" type="radio" id="SlideA" name="slide_check" checked />
    <input class="slide_select" type="radio" id="SlideB" name="slide_check" />
    <input class="slide_select" type="radio" id="SlideC" name="slide_check" />
    <input class="slide_select" type="radio" id="SlideD" name="slide_check" />
    <!-- スライド -->
    <!-- 上のラジオボックスと同じ数だけ記述します。-->
    <div class="slide">
      <!-- スライドの前へ、次へとスクロールさせるボタン -->
      <div class="scroll_controler">
        <!-- 前へボタン forで戻る先のラジオボタンのidを書きます。-->
        <!-- 先頭要素なので、最後のスライドのidである"SlideD"を書いています。 -->
        <label class="scroll_button scroll_prev" for="SlideD"></label>
        <!-- 次へボタン 上と同様にforで進む先のラジオボタンのidを書きます。-->
        <!-- 進み先は2番目の要素なので、2番目のスライドのid"SlideB"を書いています。 -->
        <label class="scroll_button scroll_next" for="SlideB"></label>
      </div>
      <!-- スライドの内容（ここでは画像）を記述します。 -->
      <!-- div要素に変えれば文字を加えることもできます。 -->
      <img src="img/a.pmg" alt="">
    </div>
    <!-- スライド（2番目）内容は1個めと同じ -->
    <div class="slide">
      <div class="controler_scroll">
        <label class="scroll_button scroll_prev" for="SlideA"></label>
        <label class="scroll_button scroll_next" for="SlideC"></label>
      </div>
      <img src="../img/a.png">
    </div>
    <!-- スライド（3番目）内容は1個めと同じ -->
    <div class="slide">
      <div class="controler_scroll">
        <label class="scroll_button scroll_prev" for="SlideB"></label>
        <label class="scroll_button scroll_next" for="SlideD"></label>
      </div>
      <img src="../img/a.png">
    </div>
    <!-- スライド（4番目）内容は1個めと同じ -->
    <div class="slide">
      <div class="controler_scroll">
        <label class="scroll_button scroll_prev" for="SlideC"></label>
        <label class="scroll_button scroll_next" for="SlideA"></label>
      </div>
      <img src="../img/a.png">
    </div>
    <!-- スライド移動用ボタン -->
    <div class="move_controler">
      <!-- 1個目のスライドのボタン -->
      <!-- 一番上のラジオボタンの1個目のスライドのid”A”をforに定義します-->
      <label class="button_move" for="SlideA"></label>
      <label class="button_move" for="SlideB"></label>
      <label class="button_move" for="SlideC"></label>
      <label class="button_move" for="SlideD"></label>
    </div>
  </div>
</div>
    </div>
    <script src="../common/js/side_ber.js"></script>
</body>
</html>
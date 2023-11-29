<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>トップ画面</title>
    <link rel="stylesheet" href="../common/css/header.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <?php require '../common/php/header.php'; ?>
    </header>
    <div class="main">
      <br>
      <h2>おすすめブランド</h2>
      <div class="carousel">
  <div class="contains">
    <input class="slide_select" type="radio" id="SlideA" name="slide_check" checked />
    <input class="slide_select" type="radio" id="SlideB" name="slide_check" />
    <input class="slide_select" type="radio" id="SlideC" name="slide_check" />
    <input class="slide_select" type="radio" id="SlideD" name="slide_check" />
    
    <div class="slide">
      
      <div class="scroll_controler">
        <label class="scroll_button scroll_prev" for="SlideD"></label>
        <label class="scroll_button scroll_next" for="SlideB"></label>
      </div>
      <img src="../common/img/1.png" class="imge">
    </div>
    <div class="slide">
      <div class="controler_scroll">
        <label class="scroll_button scroll_prev" for="SlideA"></label>
        <label class="scroll_button scroll_next" for="SlideC"></label>
      </div>
      <img src="../common/img/2.png" class="imge">
    </div>
    <div class="slide">
      <div class="controler_scroll">
        <label class="scroll_button scroll_prev" for="SlideB"></label>
        <label class="scroll_button scroll_next" for="SlideD"></label>
      </div>
      <img src="../common/img/3.png" class="imge">
    </div>
    <div class="slide">
      <div class="controler_scroll">
        <label class="scroll_button scroll_prev" for="SlideC"></label>
        <label class="scroll_button scroll_next" for="SlideA"></label>
      </div>
      <img src="../common/img/4.png" class="imge">
    </div>
    <div class="move_controler">
      <label class="button_move" for="SlideA"></label>
      <label class="button_move" for="SlideB"></label>
      <label class="button_move" for="SlideC"></label>
      <label class="button_move" for="SlideD"></label>
    </div>
  </div>
</div>
<br>
<br>
<h2>おすすめ商品</h2>
<div class="carousel">
  <div class="contains">
    <input class="slide_select2" type="radio" id="SlideE" name="slide_check2" checked />
    <input class="slide_select2" type="radio" id="SlideF" name="slide_check2" />
    <input class="slide_select2" type="radio" id="SlideG" name="slide_check2" />
    <input class="slide_select2" type="radio" id="SlideH" name="slide_check2" />
    <div class="slide2">
      <div class="scroll_controler2">
        <label class="scroll_button2 scroll_prev2" for="SlideH"></label>
        <label class="scroll_button2 scroll_next2" for="SlideF"></label>
      </div>
      <img src="../common/img/1.png" class="imge" alt="商品画像">
    </div>
    <div class="slide2">
      <div class="controler_scroll2">
        <label class="scroll_button2 scroll_prev2" for="SlideE"></label>
        <label class="scroll_button2 scroll_next2" for="SlideG"></label>
      </div>
      <img src="../common/img/2.png" class="imge" alt="商品画像">
    </div>
    <div class="slide2">
      <div class="controler_scroll2">
        <label class="scroll_button2 scroll_prev2" for="SlideF"></label>
        <label class="scroll_button2 scroll_next2" for="SlideH"></label>
      </div>
      <img src="../common/img/3.png" class="imge" alt="商品画像">
    </div>
    <div class="slide2">
      <div class="controler_scroll2">
        <label class="scroll_button2 scroll_prev2" for="SlideG"></label>
        <label class="scroll_button2 scroll_next2" for="SlideE"></label>
      </div>
      <img src="../common/img/4.png" class="imge" alt="商品画像">
    </div>
    <div class="move_controler2">
      <label class="button_move2" for="SlideE"></label>
      <label class="button_move2" for="SlideF"></label>
      <label class="button_move2" for="SlideG"></label>
      <label class="button_move2" for="SlideH"></label>
    </div>
  </div>
</div>
    </div>
    <script src="../common/js/side_ber.js"></script>
</body>
</html>
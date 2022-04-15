<?php 
  session_start();  
?>

<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>3択クイズ</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div class="main">
      <h1 class="question-title">
        3択クイズ
      </h1>
      <div class="question-instruction">
        これからクイズが3題出題されます。<br>
        必ずいずれかの選択肢を選んでください。<br>
        クイズ前にあなたの名前を入力してからスタートして下さい。
      </div>
      <div class="start-button">
        <form method="POST" action="quiz.php">
          <input type="text" name="your-name" placeholder="山本 太郎" required>
          <input type="submit" value="スタート">
        </form>
      </div>
    </div>
  </body>
</html>
<?php 
  $num_correct = $_POST['num_correct'];
  session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>3択クイズ</title>
    <link rel="stylesheet" type="text/css" href="result.css">
  </head>
  <body>
    <div class="main">
      <div class="question-title">
        クイズの結果
      </div>
      <div class="question-instruction">
        <p class="your-name"><?php echo $_SESSION["name"] ?>さんは3問中<?php echo $num_correct?>問正解しました。</p>
      </div>
      <div class="end-button">
        <a href= "index.php" >
        <img src="img/end-button.png" alt="logo">
        </a>
      </div>
    </div>
  </body>

</html>

<?php unset($_SESSION['name']) ?>
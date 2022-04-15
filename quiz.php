<?php
    $question0 = ["世界で2番目に高い山は？","富士山","K2","エベレスト","img/huzi.jpeg","img/k2.jpeg","img/everest.jfif"];
    $question1 = ["最初に桃太郎の仲間になったのは？","老夫婦","犬","サル","img/grandpm.jpeg","img/dog.jpeg","img/monky.jpeg"];
    $question2 = ["円周率の5番目の数字は？","3","2","5","img/3.png","img/2.png","img/5.png"];

    $arr = [$question0,$question1,$question2];

    if(isset($_POST['times'])){
        $times = $_POST['times'];
    }else{
        $times = 0;
    }
    if(isset($_POST['num_correct'])){
        $num_correct = $_POST['num_correct'];
    }else{
        $num_correct = 0;
    }

    $response_left = $arr[$times][1];
    $response_center = $arr[$times][2];
    $response_right = $arr[$times][3];

    $response_pic_left = $arr[$times][4];
    $response_pic_center = $arr[$times][5];
    $response_pic_right = $arr[$times][6];

    session_start();
?>

<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>3択クイズ</title>
    <link rel="stylesheet" type="text/css" href="quiz.css">
  </head>
  <body>
    <?php
      $yourName = $_POST['your-name'];
      if (!isset($_SESSION["name"])) {
        $_SESSION["name"] = $yourName;
      }
    ?>
    <p class="name"><?php echo $_SESSION["name"] ?>さん、問題です。</p>
    <div class="main">
      <div class="question-title">
        第<?php echo $times+1 ?>問
      </div>
      <div class="question-instruction">
        <?php echo $arr[$times][0] ?>
      </div>
      <div class="q-logo">
        <img src="img/q.png" alt="logo">
      </div>
      <div class="question-box">
        <form method="POST" class="form" action="quiz_result.php">
            <div class="question-box-left">
                <div class="question-number1">①</div>
                <div class="question-text">
                    <?php echo $response_left ?>
                    <input id="check-a" type="radio" name="response" value="left" checked>
                    <label for="check-a"></label>
                </div>
                <div class="question-image">
                    <img src="<?php echo $response_pic_left ?>">
                </div>
            </div>
            <div class="question-box-center">
                <div class="question-number2">②</div>
                <div class="question-text">
                    <?php echo $response_center?>
                    <input id="check-b" type="radio" name="response" value="center">
                    <label for="check-b"></label>
                </div>
                <div class="question-image">
                    <img src="<?php echo $response_pic_center ?>">
                </div>
            </div>
            <div class="question-box-right">
                <div class="question-number3">③</div>
                <div class="question-text">
                    <?php echo $response_right ?>
                    <input id="check-c" type="radio" name="response" value="right">
                    <label for="check-c"></label>
                </div>
                <div class="question-image">
                    <img src="<?php echo $response_pic_right ?>">
                </div>
            </div>
            <input type="hidden" name="times" value=<?php echo $times ?>>
            <input type="hidden" name="num_correct" value="<?php echo $num_correct ?>">
            <input id="send_button" type="submit" value="決定する" style="background-color:#FFFF99;">
        </form>
      </div>
    </div>
  </body>
</html>
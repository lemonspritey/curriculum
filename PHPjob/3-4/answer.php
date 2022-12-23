<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="style.css">
</head>
<?php
function checkAnswer($response, $answer)
{
  return ($response === $answer) ? "正解！" : "残念・・・";
}
?>
<p><?php echo $_POST["name"] . "さんの結果は・・・？" ?></p>
<p>①の答え</p>
<p><?php echo (checkAnswer($_POST["response"][0], $_POST["answers"][0])); ?></p>
<p>②の答え</p>
<p><?php echo (checkAnswer($_POST["response"][1], $_POST["answers"][1])); ?></p>
<p>③の答え</p>
<p><?php echo (checkAnswer($_POST["response"][2], $_POST["answers"][2])); ?></p>

</html>
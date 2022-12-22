<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="style.css">
</head>
<form action = 'answer.php' method = 'post'>
  <?php
    $name = $_POST["name"];
    $options = array(array(80, 22, 20, 21),
      array("PHP", "Python", "JAVA", "HTML"),
      array("join", "select", "insert", "update"));
  ?>
  <input type="hidden" name="name" value="<?php echo $name?>"/>
  <?php printf("<p>お疲れ様です%sさん</p>", $name); ?>

  
  <h2>①ネットワークのポート番号は何番？</h2>

  <?php foreach($options[0] as $option) {?>
      <input type="radio" name="answer0" value="<?php echo $option?>" />
      <span> <?php echo $option;?></span>
  <?php }?>

  <h2>②Webページを作成するための言語は？</h2>
  <?php foreach($options[1] as $option) {?>
      <input type="radio" name="answer1" value="<?php echo $option?>" />
      <span> <?php echo $option;?> </span>
  <?php }?>

  <h2>③MySQLで情報を取得するためのコマンドは？</h2>
  <?php foreach($options[2] as $option) {?>
      <input type="radio" name="answer2" value="<?php echo $option?>" />
      <span> <?php echo $option;?></span>
  <?php }?>
  <br>
  <input type="submit" value="回答する" />
</form>
</html>
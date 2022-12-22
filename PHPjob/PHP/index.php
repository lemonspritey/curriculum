<html>
<?php
$myArray = ["red" => "赤", "blue" => "青", "green" => "緑"];
var_dump($myArray);
echo "<br>";
$myArray["yellow"] = "黄色";
var_dump($myArray);
echo "<br>";

$fruits = ["apple" =>"りんご", "orange" => "みかん", "peach" => "もも"];
foreach ($fruits as $key => $value)
{
    echo "$key と言ったら $value<br>";
}

function getBoxVolume($height, $width, $length)
{
    return $height * $width * $length;
}
echo getBoxVolume(5, 10, 8);
?>
</html>
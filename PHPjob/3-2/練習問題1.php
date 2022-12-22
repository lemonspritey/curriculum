<html>
<?php
$fruitCost = ["リンゴ" => 300, "みかん" => 150, "もも" => 3000];
$fruitAmount = [2, 3, 4];

function getFruitTotalCost($cost, $amount)
{
    return $cost * $amount;
}

$i=0;
foreach ($fruitCost as $key => $value)
{
    echo $value."円の".$key."を".$fruitAmount[$i]."こで合計".getFruitTotalCost($value, $fruitAmount[$i])."円です。<br>";
    $i++;
}
?>
</html>
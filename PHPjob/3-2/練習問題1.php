<html>
<?php
$fruitCost = ["リンゴ" => 300, "みかん" => 150, "もも" => 3000];
$fruitAmount = [1, 2, 3];

function getFruitTotalCost($cost, $amount)
{
    return $cost * $amount;
}

foreach($fruitCost as $key => $value)
{
    echo "$key<br>";
}

?>
</html>
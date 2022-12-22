<html>
<?php

$digit = pickRandomDigit($_POST["num"]);
echo date("Y/m/d/", time())."の運勢は<br>";
echo "選ばれた数字は$digit<br>";
echo numToUranai($digit);

function pickRandomDigit($num)
{
    $numlength = strlen((string)$num);
    return $num[mt_rand(0, $numlength - 1)];
}

function numToUranai($digit)
{
    switch($digit)
    {
        case 0:
            return "凶";
            break;
        case 1:
        case 2:
        case 3:
            return "小吉";
            break;
        case 4:
        case 5:
        case 6:
            return "中吉";
            break;
        case 7:
        case 8:
            return "吉";
            break;
        case 9:
            return "大吉";
            break;
        default:
            return "error";
    }
}
?>
</html>
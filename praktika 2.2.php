<?php
$x = 100;
$y = 50;
$array = [];

function GetANumber($x, $y)
{
    if ($x % 2 == 1)
    {
        while ($x >= $y);
        {
            $array .= $x;
            echo $array;
        }
    }
}

$p = GetANumber($x, $y);
echo $p;
?>
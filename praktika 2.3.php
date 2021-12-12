<?php
echo 'Выводим массив простых чисел от 1 до 1000<br>';

global $arr_simple;
$arr_simple = array();

for ($num = 1; $num <= 30; $num++)
{
    GetSimpleNumber ($num, $arr_simple);
    }
    
//print_r($arr_simple);

function GetSimpleNumber($i, &$arr_simple){

    if($i == 1) {
        return;
    }
    elseif($i == 2){
        $arr_simple[] = $i;
        echo $i . "<br>";
        return;
    }
       
    foreach ($arr_simple as $simple) {
                
        if ((int)($i/$simple) == ($i/$simple)){
            return;
            
        }
    }
    $arr_simple[] = $i;
    echo $i . "<br>";
}
?>
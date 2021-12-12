<?php
/*
function pr ($s) {
    echo "<pre>";
    print_r($s);
    echo "</pre>";
    
*/

$arMonth = array();

function SetMonth($days, $dayName){
    if (($days>=28) AND ($days<=31)){
        $arDays = array ("Понедельник", "Вторник","Среда","Четверг","Пятница","Суббота","Воскресенье");
        
        for ($d; $d < count($arDays); $d++){
            if ($dayName = $arDays[$d]){
                $d = $start;
            }
        }
        for ($j = $start; $j < $days + $start; $j++){
              if (in_array($dayName, $arDays)){
                $i = $j%7;
                $arMonth = $arDays[$i];                
              } 
              else{
                echo "Введите корретное название дня недели с большой буквы";
                break;
              }             
        }
    }
    
    else {
        echo "Введите корректное количество дней в месяце";
        
    } 
    
}
SetMonth (30, "Понедеик");
pr($arMonth);
?>
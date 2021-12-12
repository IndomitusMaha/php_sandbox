<?php
/*
function pr ($s) {
    echo "<pre>";
    print_r($s);
    echo "</pre>";
    
}*/

function SetMonth($days, $dayName){
    if (($days>=28) AND ($days<=31)){
        $arDays = array ("Понедельник", "Вторник","Среда","Четверг","Пятница","Суббота","Воскресенье");
        
        for ($j = 0; $j < $days; $j++){
              if (in_array($dayName, $arDays)){
                $calendar = array();
                
                
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
SetMonth (30, "Понедеик")

?>
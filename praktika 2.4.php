<?

function pr ($s) {
   echo "<pre>";
   print_r($s);
   echo "</pre>";
    
function SetMonth($days, $dayName){
    if (($days>=28) AND ($days<=31)){
        $arDays = array ("Понедельник", "Вторник","Среда","Четверг","Пятница","Суббота","Воскресенье");
        
        for ($d = 0; $d < count($arDays); $d++){
            if ($dayName == $arDays[$d]){
                $start = $d;
            }
        }
        for ($j = $start; $j < $days + $start; $j++){
              if (in_array($dayName, $arDays)){
                $i = $j%7;
                $arMonth[] = $arDays[$i];  
                return $arMonth;              
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
$arResult = SetMonth(31, "Понедельник");
pr($arResult);
?>
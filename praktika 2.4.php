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
        $arDays = array ("�����������", "�������","�����","�������","�������","�������","�����������");
        
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
                echo "������� ��������� �������� ��� ������ � ������� �����";
                break;
              }             
        }
    }
    
    else {
        echo "������� ���������� ���������� ���� � ������";
        
    } 
    
}
SetMonth (30, "��������");
pr($arMonth);
?>
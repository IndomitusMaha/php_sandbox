<?php
/*
function pr ($s) {
    echo "<pre>";
    print_r($s);
    echo "</pre>";
    
}*/

function SetMonth($days, $dayName){
    if (($days>=28) AND ($days<=31)){
        $arDays = array ("�����������", "�������","�����","�������","�������","�������","�����������");
        
        for ($j = 0; $j < $days; $j++){
              if (in_array($dayName, $arDays)){
                $calendar = array();
                
                
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
SetMonth (30, "��������")

?>
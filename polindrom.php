<?php

function pr($s){
    echo "<pre>";
    print_r($s);
    echo "</pre>";
    }

function bacwards($str){
    $r = '';
    for ($i = mb_strlen($str); $i >= 0; $i--){
        $r .= mb_substr($str, $i, 1);
    }
    return $r;
}
function isItAPolindrome($s){
    $return = 0;
    $s = trim($s);
    $arSymbols = array (' ', '.', ':', ',', '$', '#', '&', '@');
    $s = mb_strtolower(str_replace($arSymbols, '', $s));
    $sRev = bacwards($s);
    if($s == $sRev){
        $return = 1;
    }
    return $return;
}

$arPhrases = array(
'“ут как тут',
'hon',
'up pu',
'12  25  5221');

foreach ($arPhrases as $phrase){
    $result = '<span style="color:red">Not a polindrom</span>';
    $res = isItAPolindrome($phrase);
    if($res) $result = '<span style="color:green">Polindrom</span>';
    pr($phrase.' - '.$result);
}

?>
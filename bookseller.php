<?php

function stockList($listOfArt, $listOfCat){

    $c  = array_flip($listOfCat);
    
    foreach($c as $k=>$v){
        $c[$k] = 0;
    }



    foreach($listOfArt as $k => $v){
        $code = explode(' ',$v);
        $qty = $code[1];
        $label = $code[0];

        $c[$label[0]] +=$qty;
    }

    $res = '';

    foreach($c as $k => $v){
        $res .= "({$k} : {$v}) - ";
    }
    $res = trim($res,' - ');
    
    return $res;
}

$b = ["BBAR 150", "CDXE 515", "BKWR 250", "BTSQ 890", "DRTY 600"];
$c = [0=>"A", 1=>"B", "C", "D"];
// ['A' => 0, 'B' => 0, 'C'=>0, 'D'=>0]

echo stockList($b,$c);
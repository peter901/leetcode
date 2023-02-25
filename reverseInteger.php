<?php 

function reverseInteger($int){
    $negative = false;
    if($int < 0) $negative = true;

    $int = (String) abs($int);


    $p1=0;
    $p2=strlen($int)-1;
   
    while ($p1<$p2){
        $temp = $int[$p1];
        $int[$p1] = $int[$p2];
        $int[$p2] = $temp;
        $p1++; $p2--;
    }
    
    return $negative? -1* (int) $int: (int) $int;
}

echo reverseInteger(-12345678901);
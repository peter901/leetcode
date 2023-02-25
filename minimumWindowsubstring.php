<?php

function minimumWindow($s, $t){
    $hashT = [];
    $hashS = [];
    $tLength = strlen($t);
    $count = 0;
    $startIndex = -1;
    $j = 0;
    $minLen = PHP_INT_MAX;
    
    for($i=0; $i< strlen($t); $i++){
        $hashT[$t[$i]] = isset($hashT[$t[$i]])? $hashT[$t[$i]]+1 :1;
    }

    for($i=0; $i<strlen($s); $i++){
               
        $hashS[$s[$i]] = isset($hashS[$s[$i]])? $hashS[$s[$i]]+1 :1;
        
        if(isset($hashT[$s[$i]]) && $hashS[$s[$i]] <= $hashT[$s[$i]])
        {
            $count++;
        }
        
        if($count == $tLength){
            
            while(!isset($hashT[$s[$j]]) || $hashS[$s[$j]] >  $hashT[$s[$j]] )
            {   
                var_export([$s[$j],$hashS[$s[$j]], $hashS]);
                $hashS[$s[$j]] = $hashS[$s[$j]]-1;
                $j++;
            }
            echo "*****************************************************";
            $windowSize = $i - $j+1;
            if($windowSize < $minLen){ 
                $startIndex = $j;
                $minLen = $windowSize;
            }
        }
    }

    if($startIndex == -1) return "";
    $res = "";

    for($i = $startIndex; $i<$minLen+$startIndex; $i++){
        $res .=$s[$i];
    }
    return $res;


}

var_export(minimumWindow("XZADOBEODEBANcgujuuyyytrrrtttyyyuhC", "ABC"));

#"ADOBECODEBANC" , "ABC";



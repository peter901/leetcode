<?php
function minOperations($logs) {
    $stack = [];

    for($i = 0; $i < count($logs); $i++){

        if($logs[$i] == './'){

        }

        if($logs[$i] == '../' && count($stack) > 0){
            array_pop($stack);
        }else{
            array_push($stack,$logs[$i]);
        }
    }

    return count($stack)== 0 ? 0 : count($stack) -1;

    return count($stack);
    
}


$n = ["d1/","d2/","../","d21/","./"];
echo minOperations($n);
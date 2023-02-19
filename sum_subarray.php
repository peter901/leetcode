<?php

function sumOddLengthSubarrays($arr) 
{
    $n = count($arr); $answer =0;

    for($i = 0; $i < $n; ++$i){
        $left = $i; $right = $n - $i -1;
        $answer +=  $arr[$i]* (intdiv($left, 2) + 1) * (int) ($right/2 +1);
        $answer +=  $arr[$i]*(intdiv($left+1,2)) * (int) (intdiv($right + 1,2));
    }

    return $answer;
}

echo sumOddLengthSubarrays([1,4,2,5,3]);
//echo sumOddLengthSubarrays([1,2]);
//echo sumOddLengthSubarrays([10,11,12]);
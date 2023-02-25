<?php

function moveZeroes(&$nums) {
    $n = count($nums);
    $p =0;
    $cur = 0;

    for($cur=0;$cur < $n; $cur++)
    {
        if($nums[$cur] !=0){
            $temp = $nums[$p];
            $nums[$p]=$nums[$cur];
            $nums[$cur]=$temp;
            $p++;
        }
    }
}

$array = [1,2,0,0,3,12];//[0,0,1];//

moveZeroes($array);
var_export($array);


<?php 

function moveZeros(&$nums){

    $nums;
    $p=0;
    for($i=0; $i < count($nums); $i++){
        if($nums[$i]!=0){
            $nums[$p++] =$nums[$i];
        }
    }

    for($i=$p; $i< count($nums); $i++){
        $nums[$i] = 0;
    }
}

$arr = [0,0,1,0,3,12];
moveZeros($arr);
var_export($arr);
<?php
function findPeakElement($nums){

    $left = 0;
    $right = count($nums)-1;

    while($left< $right){

        $mid = $left + floor(($right - $left)/2);

        if($nums[$mid] < $nums[$mid+1]){
            $left = $mid +1;
        }else{
            $right = $mid;
        }
    }

    return (int) $left;
}

var_export(findPeakElement([7,6,5,3,2,1]));
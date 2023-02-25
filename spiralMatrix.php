<?php 

function spiralMatrix($array){
    $size = count($array) * count($array[0]);
    $top = 0;
    $bottom = count($array)-1;
    $left = 0;
    $right = count($array[0])-1;
    $nums =[];

    while(count($nums) < $size ){

        for($i = $left; $i<=$right && count($nums) < $size; $i++){
            $nums[] = $array[$top][$i];
        }
        $top++;

        for($i=$top; $i <=$bottom && count($nums) < $size; $i++ ){
            $nums[] = $array[$i][$right];
        }
        $right--;

        for($i=$right; $i>=$left && count($nums) < $size; $i--){
            $nums[] = $array[$bottom][$i];
        }
        $bottom--;

        for($i=$bottom; $i>=$top && count($nums) < $size; $i--){
            $nums[] = $array[$i][$left];
        }
        $left++;

    }
    return $nums;
}


$array = [[1,2,3],[4,5,6],[7,8,9]];
spiralMatrix($array);
#123698745
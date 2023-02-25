<?php
function getLengthOfMissingArray($arrayOfArrays) {
    if(empty($arrayOfArrays)) return 0;
    $res = [];
  
    for($i=0; $i < count($arrayOfArrays); $i++){
      if(empty($arrayOfArrays[$i])){
        $res[] = 0;
        continue;
      }
      $res[] = count($arrayOfArrays[$i]);
    }
  
    sort($res);
  
    for($i=1; $i<count($res); $i++){
      if($res[$i] - $res[$i-1] > 1 ){
        return $res[$i-1]+1;
      }
    }
    return 0;
}


echo getLengthOfMissingArray([[3],[],[27,36,34,18],[9,27,17]]);
echo "\n";
echo getLengthOfMissingArray([[46,5,39,14,33,36,30,29,45,24],[45,36,34,1,16,45,2,5,26,37,19],[13],[6,26,9,10,34,16,9,29,5],[],[4,43,22,7,23,48,12,45],[48,48,11],[22,49,20,36,48],[25,4,8,15,14,27],[10,10],[3,26,6,44,44,19,45]]);
<?php
class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $diff
     * @return Integer
     */
    function arithmeticTriplets($nums, $diff)
    {
        $hash = [];

        for($i=0; $i < count($nums); $i++){
            $hash[$nums[$i]] = 0;
        }
        

        for($i =0; $i < count($nums); $i++){

            $val = $nums[$i];
            $one = (int) $val - (int) $diff;
            $two = (int) $val - ( (int) $diff * 2);

            if(isset($hash[$one]))
            {
                $hash[$val]++;
            }

            if(isset($hash[$two])){
                $hash[$val]++;
            }
        }

        $count = 0;
        foreach($hash as $h => $v){
            if($v == 2){
                $count++;
            }
        }

        return $count;

    }
}



<?php 
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        
        $hashTable = [];
        
        foreach($nums as $k=>$n){
           
            $diff = $target -$n;
            
            if(isset($hashTable[$n])){
                return [$hashTable[$n][0],$k];
            }else{
                $hashTable[$diff] = [$k,$n];
            }
        }
        
        return false;
        
    }
}

$mySolution = new Solution();

var_export($mySolution->twoSum([2,7,11,15],9));
<?php 

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function makeGood($s) {
        if($s == '') return '';

        $stack =[];

        for($i =0; $i < strlen($s); $i++){
            $n = count($stack);
            if(empty($stack)){
                array_push($stack,$s[$i]);
            }else{

                $ele = $stack[$n-1];
                $cur = $s[$i];
                $diff = abs(ord($ele) - ord($cur));

                if( $diff== 32 ){
                    array_pop($stack);
                }
                else{
                    array_push($stack,$s[$i]);
                }
            }
        }

        $res = implode('',$stack);

        return $res;

    }
}

$soln = new Solution();

$soln->makeGood("leEeetcode");
$soln->makeGood("Pp");
$soln->makeGood("abBAcC");

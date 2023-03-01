<?php

use Solution as GlobalSolution;

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function removeOuterParentheses($s) {

        $res ="";
        $count = 0;

        for($i = 0; $i < strlen($s); $i++){
            $brace = $s[$i];
            if($brace == '(')
            {
                $count++;
                if($count != 1){
                    $res .=$brace;
                }
            }

            if($brace == ')'){
                $count--;
                if($count !=0){
                    $res .=$brace;
                }
            }
        }

        return $res;
    }
}

$s = "(()())(())";
$soln = new Solution();
var_export($soln->removeOuterParentheses($s));
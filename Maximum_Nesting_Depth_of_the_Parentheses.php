<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function maxDepth($s) {
        $maxDepth = -1;
        $stack=[];

        for( $i =0; $i < strlen($s); $i++ ){

            if($s[$i] == '('){
                array_push($stack,'(');
            }

            if($s[$i] == ')'){
                $maxDepth = max($maxDepth, count($stack));

                array_pop($stack);
            }
        }

        return $maxDepth < 0? 0 : $maxDepth;
    }
}


$sln = new Solution();

$s = "(1+(2*3)+((8)/4))+1";
echo $sln->maxDepth($s);
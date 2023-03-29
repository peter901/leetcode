<?php

class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function countGoodSubstrings($s)
    {
        $count = 0;

        for($i = 0 ; $i < strlen($s)-2; $i++){
            
            $first =$s[$i];
            $second = $s[$i+1];
            $third  = $s[$i+2];

            if( $first != $second && $first != $third && $second != $third )
            {
                $count++;
            }

        }  
        return $count;    
    }
}


$soln = new Solution;

$soln->countGoodSubstrings("xyzzaz");

<?php

/**
 * Solution the the problem below
 * 
 * You are climbing a staircase. It takes n steps to reach the top.
 * Each time you can either climb 1 or 2 steps. In how many distinct ways can you climb to the top?
 */
class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {
        $dp = []; 
        return $this->steps($n,$dp);
    }

    function steps($n,&$dp){
        if($n < 0) return 0;
        if($n ===1) return 1;
        if($n ===2) return 2;
        
        if(isset($dp[$n])) return $dp[$n];
        $dp[$n] =  $this->steps($n-1,$dp)+$this->steps($n-2,$dp);
        return $dp[$n];
    }
}
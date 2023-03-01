<?php

class Solution {

    /**
     * @param Integer $n
     * @param Integer $k
     * @return Integer
     */
    function findTheWinner($n, $k) {
        
        $queue = range(1,$n);

        $count = 1;
        while(count($queue) > 1){
            $rem = $count%$k;
            
            if($rem == 0){
                array_shift($queue);
            }
            else{
                $ele = array_shift($queue);
                array_push($queue,$ele);
            }
            $count ++;
        }

        return $queue[0];
    }
}

$soln = new Solution();
$soln->findTheWinner(5,2);
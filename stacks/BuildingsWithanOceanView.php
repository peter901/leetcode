<?php
class Solution
{

    /**
     * @param Integer[] $heights
     * @return Integer[]
     */
    function findBuildings($heights)
    {

        $stack = [];

        array_push($stack, count($heights) - 1);

        for ($i = count($heights) - 2; $i >= 0; $i--) {

            $pos = $stack[count($stack)-1];
            $cur = $heights[$i];
            $prev = $heights[$pos];
            if ($cur > $prev) {
                array_push($stack, $i);
            }
        }

        return array_reverse($stack);
    }
}

$soln = new Solution();
$soln->findBuildings([1,3,2,4]);

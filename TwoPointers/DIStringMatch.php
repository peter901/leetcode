<?php

class Solution
{

    /**
     * @param String $s
     * @return Integer[]
     */
    function diStringMatch($s)
    {
        $n = strlen($s);
        $perm = array_fill(0, $n + 1, 0);
        $nums = range(0, $n + 1);
        $i = 0;
        $j = $n;

        for ($k = 0; $k < $n; $k++) {
            if ($s[$k] === 'I') {
                $perm[$k] = $nums[$i];
                $i++;
            } else {
                $perm[$k] = $nums[$j];
                $j--;
            }
        }

        $perm[$n] = $nums[$i];

        return $perm;
    }
}

$soln = new Solution();

$soln->diStringMatch("IDID");

<?php
class Solution
{

    /**
     * @param Integer[] $temperatures
     * @return Integer[]
     */
    function dailyTemperatures($temperatures)
    {
        $ans[0] = 0;
        $hash[] = [0, $temperatures[0]];

        for ($i = 1; $i < count($temperatures); $i++) {
            $ans[$i] = 0;
            $cur = $temperatures[$i];

            $top_arr = $hash[count($hash) - 1];
            $top_val = $top_arr[1];
            $top_in = $top_arr[0];

            while ($cur > $top_val && count($hash) > 0) {
                $ans[$top_in] = $i - $top_in;
                array_pop($hash);

                if(count($hash) > 0)
                {
                    $top_arr = $hash[count($hash) - 1];
                    $top_val = $top_arr[1];
                    $top_in = $top_arr[0];
                }
            }

            $hash[] = [$i, $temperatures[$i]];
        }

        return $ans;
    }
}

$soln = new Solution();

$soln->dailyTemperatures([73,74, 75, 71, 69, 72, 76, 73]);

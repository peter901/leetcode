<?php

class Solution
{

    /**
     * @param String $s
     * @return String[]
     */
    function restoreIpAddresses($s)
    {
        if (strlen($s) > 12) {
            return [];
        }
        $res = [];

        $this->dfs(0, 0, '', $s,$res);

        return $res;
    }

    function dfs($i, $dots, $curIP, $s, &$res)
    {
        if ($dots == 4 && $i  == strlen($s)) {
            $res[] = trim($curIP, '.');
            return;
        }

        if ($dots > 4) {
            return;
        }


        for ($j = $i; $j < strlen($s); $j++) {
            $len = $j -$i +1;
            $curstr = substr($s, $i, $len);

            if ((int)$curstr < 256 && ($j == $i || $curstr[0] != 0)) {
                $this->dfs($j + 1, $dots + 1, $curIP . $curstr . ".", $s,$res);
            }
        }
    }
}

$sln = new Solution();

var_export($sln->restoreIpAddresses("101023"));

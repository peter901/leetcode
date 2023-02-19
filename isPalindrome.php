<?php
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        if($x< 0)
            return false;

        $revertedNumber = 0;

        while($x > $revertedNumber){
            $x_before = $x;
            $revertedNumber = $revertedNumber * 10 + $x%10;

            $x = intval($x/10);

            var_export([
                'x'=>$x_before,
                'x%10'=> $x_before%10,
                'revertedNumber'=>$revertedNumber
            ]);
            echo "\n\n";
        }

        var_export(['$x'=>$x,'$revertedNumber'=>$revertedNumber]);

        return $x == $revertedNumber || $x == intval($revertedNumber/10);
    }
}

$mySolution = new Solution();
var_export($mySolution->isPalindrome(10151011015101));
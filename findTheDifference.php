<?php
class Solution {

    function findTheDifference($s, $t) {
        $hashmap =[];
        
        for($i =0; $i<strlen($s);$i++){
            if(!isset($hashmap[$s[$i]])) $hashmap[$s[$i]]=0;

            $hashmap[$s[$i]] +=1;
        }

        for($i=0; $i<strlen($t); $i++){

            if(!isset($hashmap[$t[$i]])) return $t[$i];

            if($hashmap[$t[$i]]==0){
                return $t[$i];
            }
            else{
                $hashmap[$t[$i]] -=1;
            }
        }
    }
}

$mysoln = new Solution();
var_export($mysoln->findTheDifference("abcd","abcde"));
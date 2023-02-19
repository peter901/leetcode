<?php
/**
 * check if char isset
 * if char isset. 
 * check if it is greater the left pointer 
 * if it is greater the left pointer. increment right pointer and move on
 */

function longest_substring($str){
    $hashmap = [];
    $max = 0;
    $p = 0;
    for($i=0; $i<strlen($str);$i++){
            
        if((isset($hashmap[$str[$i]]) && $p > $hashmap[$str[$i]]) || !isset($hashmap[$str[$i]])){
            $max = max($max,$i-$p+1);
        }
        else{
            $p = $hashmap[$str[$i]]+1;
        }

        $hashmap[$str[$i]] = $i;
    }

    return $max;
}

echo longest_substring("abcbda");
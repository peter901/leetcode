<?php 
class Solution {

    /**
     * @param String $word
     * @param String $ch
     * @return String
     */
    function reversePrefix($word, $ch) {
        $word = str_split($word);
        
        for($i=0; $i < count($word); $i++){


            if($word[$i] === $ch)
            {
                $end = $i;
                $start = 0;

                while($start < $end){
                    $temp  = $word[$start];
                    $word[$start] = $word[$end];
                    $word[$end] = $temp;

                    $start++;
                    $end--;
                }
                break;
            }
        }

        return implode('',$word);
    }
}
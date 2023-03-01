<?php

include "./LinkedLists.php";

class Solution {

    /**
     * @param ListNode $head
     * @param Integer $m
     * @param Integer $n
     * @return ListNode
     */
    function deleteNodes($head, int $m, int $n) {
        

        $cur = $head;
        $count = 1;

        while($cur){
            $rem = $count % (int)$m;
            if( $rem==0){
                $tempcur = $cur;
                $tn = 0;

                //deleting
                while($tn < $n and $tempcur){
                    $tempcur = $tempcur->next;
                    $tn++;
                }
                $cur->next = $tempcur->next;
                $count = 1;

            }else{
                $count++;
            }
            
            $cur = $cur->next;

        }

        return $head;
    }
}


$head = [1,2,3,4,5,6,7,8,9,10,11,12,13];

$list = new LinkedList();

for($i =0; $i < count($head); $i++){
    $list->append($head[$i]);
}

$soln = new Solution();
$soln->deleteNodes($list->head, 2,3);
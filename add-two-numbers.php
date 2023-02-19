<?php 

 //Definition for a singly-linked list.
 class ListNode {
      public $val = 0;
      public $next = null;
      function __construct($val = 0, $next = null) {
          $this->val = $val;
          $this->next = $next;
      }
  }
 
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        
      //  $newNode = new ListNode();

      
        while($l1->next != null){
            
            $newNode = new ListNode($l1->val + $l2->val);
            
            if(!isset($l3)){
                $l3 = $newNode;
            }else{
                $l3->next = $newNode;
            }
            
            $l1 = $l1->next;
            $l2 = $l2->next;
            
        }
        
        return $l3;
    }
}

$mySolution = new Solution();

//$mySolution = 
<?php

class ListNode{

    public function __construct($value){
        $this->val = $value;
        $this->next = null;
    }
}


$myList = new ListNode(0);
$curr = $myList;

for($i = 1; $i < 10; $i++){ 
    $curr->next = new ListNode($i);
    $curr = $curr->next;
}

var_export([$curr,$myList->next]);


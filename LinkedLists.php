<?php

class Node{

    function __construct($val)
    {
        $this->val= $val;
        $this->next = null;
    }
}

class LinkedList{

    public $head;
    public $tail;
    public $length;

    function __construct()
    {
        $this->head = null;
        $this->tail = null;
        $this->length =0;
    }

    function append($val){

        $node = new Node($val);

        if($this->head == null){
            $this->head = $node;
            $this->tail = $this->head;
        }else{

            $cur = $this->head;

            while($cur->next){
                $cur = $cur->next;
            }

            $cur->next = $node;
            $this->tail = $node;
        }

        $this->length++;
    }

    function insert($index, $val){
        if($index > $this->length){
            throw new Exception("Invalid insert index");
        }

        $newnode = new Node($val);
        $count =1;
        
        $cur = $this->head;

        while($count < $index-1){
            $cur = $cur->next;
            $count++;
        }
        
        $temp = $cur->next;
        $cur->next = $newnode;
        $newnode->next= $temp;
    }

    function delete($index){
        if($index > $this->length){
            throw new Exception("Invalid insert index");
        }

        $cur = $this->head;
        $count = 1;

        while($count < $index-1){
            $cur = $cur->next;
            $count++;
        }
    
        $delete = $cur->next;
        $cur->next = $cur->next->next;
        $delete->next = null;
        $this->length--;
        return $delete;

    }
    function display(){
        $cur = $this->head;

        while($cur){
            echo "{$cur->val} ";
            $cur = $cur->next;
        }
    }

    function reverse(){
        $prev = null;

        $cur = $this->head;

        while($cur){
            $temp = $cur->next;
            $cur->next = $prev;
            $prev = $cur;
            $cur = $temp;
        }

        $this->head = $prev;
    }

}


$linkedList = new LinkedList();


$arr = [1,2,3];

for($i = 0; $i< count($arr); $i++){
    $linkedList->append($arr[$i]);
}

//$linkedList->display();
//$linkedList->reverse();
$linkedList->insert(1,5);
echo "\n";
$linkedList->delete(3);
$linkedList->display();

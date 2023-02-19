<?php 
class Node {
    public $data;
    public $next;

    public function __construct($data){
        $this->data = $data;
        $this->next = null;
    }
}

function createLinkedList($arr){
    
    $head = $p= new Node($arr[0]);

    for($i=1; $i<count($arr);$i++)
    {
        $t = new Node($arr[$i]);
        $p->next = $t;
        $p = $t;
    }

    return $head;
}

$list1 = createLinkedList([5,15,25,35,45]);
//var_export($list1);
echo "\n\n";
$list2 = createLinkedList([10,20,30,40,50]);
//var_export($list2);

function displayLinkedList($p){
    
    while($p){
        echo $p->data." ";
        $p = $p->next;
    }
    echo "\n";
}

function mergeLinkedList($p1,$p2){
    $p3=$l=NULL;
    
    if($p1->data < $p2->data){
        $l=$p3=$p1;
        $p1=$p1->next;
        $l->next=null;
    }else{
        $l=$p3=$p2;
        $p2=$p2->next;
        $l->next=null;
    }

    while($p1 && $p2)
    {
        if($p1->data < $p2->data){
            $l->next = $p1;
            $l = $p1;
            $p1 = $p1->next;
           $l->next = null;
        }
        else{
            $l->next = $p2;
            $l = $p2;
            $p2 = $p2->next;
            $l->next = null;
        }
    }

    if($p1){$l->next = $p1; $l = $p1;}
    if($p2){$l->next = $p2; $l = $p2;}
    return $p3;
}

$p = mergeLinkedList($list1,$list2);
var_export($p);
displayLinkedList($p);

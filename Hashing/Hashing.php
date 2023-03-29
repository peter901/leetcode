<?php

class Node
{

    public $val;
    public $next;

    function __construct($val = null)
    {
        $this->val = $val;
    }
}

class Hash
{

    public $H;

    function __construct()
    {
        $this->H = [];
    }

    function _hash($val)
    {
        return $val%10;
    }

    function insert($val)
    {
        $key = $this->_hash($val);

        $node = new Node($val);

        if(isset($this->H[$key])){

            $cur = $this->H[$key];
            if($cur->val > $val){
                $temp = $cur;
                $this->H[$key] = $node;
                $node->next = $cur;
                return;
            }

            while($cur->next){

                if($cur->next->val > $val){
                    $temp = $cur->next;
                    $cur->next = $node;
                    $node->next = $temp;
                    return;
                }
                $cur = $cur->next;
            }
            $cur->next = $node;

        }else{
            $this->H[$key] = $node;
        }
    }
}

$hash = new Hash;

$hash->insert(122);
$hash->insert(2);
$hash->insert(22);
$hash->insert(42);
$hash->insert(32);

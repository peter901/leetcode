<?php

class TreeNode
{
    public $val;
    public $left;
    public $right;

    function __construct($val = null)
    {
        $this->val = $val;
        $this->left = null;
        $this->right = null;
    }
}

class Tree
{
    public $root;
    public array $arr_rep = [];

    function __construct()
    {
        $this->root = null;
    }

    function create_tree($n){

        for($i = 0; $i < count($n); $i++){
            $this->add($n[$i]);
        }
        $this->clean();
        return $this->root;
    }


    function add($val = null)
    {

        $node = new TreeNode($val);

        if (!$this->root) {
            $this->root = $node;
        } 
        else 
        {
            $stack = [$this->root];

            while (!empty($stack)) 
            {
                $n = array_shift($stack);

                if($n->val === null ) continue;
                
                if (!$n->left) {
                    $n->left = $node;
                    return;
                } else {
                    array_push($stack, $n->left);
                }

                if (!$n->right) {
                    $n->right = $node;
                    return;
                } else {
                    array_push($stack, $n->right);
                }
            }
        }
    }

    function clean(){

        $this->dfs_clean($this->root->left, $this->root,'left');
        $this->dfs_clean($this->root->right, $this->root, 'right');

    }

    function dfs_clean($root, $parent, $pos){
        
        if($root === NULL ){
            return;
        }

        if($root->val === null){
            if($pos == 'left'){
                $parent->left = null;
            }
            else{
                $parent->right = null;
            }
        }

        $this->dfs_clean($root->left, $root, 'left');
        $this->dfs_clean($root->right,$root,'right');
    }


    function bfs(){
        
        $queue = [$this->root];

        while(!empty($queue)){
            $node = array_shift($queue);

            if($node->val == null) { array_push($this->arr_rep,NULL); continue;}

            array_push($this->arr_rep,$node->val);

            if($node->left){
                array_push($queue,$node->left);
            }

            if($node->right){
                array_push($queue, $node->right);
                continue;
            }

            array_push($this->arr_rep,NULL);

        }
    }

    function dfs_traversal()
    {
        $this->dfs($this->root);
    }

    private function dfs($root)
    {
        if (!$root) {
            return;
        }
        
        array_push($this->arr_rep, $root->val);
        
        if ($root->left) {
            $this->dfs($root->left);
        }

        if ($root->right) {
            $this->dfs($root->right);
        }
    }
}



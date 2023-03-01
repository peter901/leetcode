<?php 
class TreeNode{

    function __construct($val = 0, $left =null, $right =null)
    {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}


class Solution{
    
    public $root = null;
    
    function evaluate($root){
        
    }

    function add($x, $direction){

        $node = new TreeNode($x);

        if($this->root === null){
            $this->root = $node;
        }
        else{
            $cur = $this->root;
        }
    }

    function dfs_add(array $nums, $insert_index){

        if($insert_index < 0){
            return
        }


        $node = new TreeNode($nums[$insert_index]);        

        if($this->root === null){
            $this->root = $node;
        }else{
            
        }
    }
}



$n = ["3","4","+","2","*","7","/"];

$n = array_reverse($n);



$soln = new Solution();

for($i =0; $i < count($n); $i++){

    $soln->add($n[$i], );
}

$soln = new Solution();

echo $soln->evaluate($tree->root);
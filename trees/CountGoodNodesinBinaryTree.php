<?php

include './Tree.php';

class Solution {
    
    protected $count = 0;

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function goodNodes($root) {
        
        $this->dfs($root, $root->val);

        return $this->count;
    }

    function dfs($root, $max){

        if($root == null || $root->val === null){
            return; 
        }

        $val = $root->val;
        if($val >= $max){
            $this->count++;
            $max = $val;
        }

        $this->dfs($root->left, $max);
        $this->dfs($root->right, $max);


    }


}

$soln = new Solution();

$soln->goodNodes(createTree([3,1,4,3,null,1,5]));

function createTree($n){
    $tree = new Tree();

    for($i = 0; $i <count($n); $i++){
        $tree->add($n[$i]); 
    }
    return $tree->root;
}
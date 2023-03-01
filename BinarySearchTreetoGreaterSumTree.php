<?php

include  "./Tree.php";

class Solution {

    /**
     * @param TreeNode $root
     * @return TreeNode
     */
    function bstToGst($root) {
        $this->sum = 0;
        $this->dfs($root);
        return $root; 
    }

    function dfs($root){
        if($root == null || $root->val === null){
            return null;
        }
            
        $this->dfs($root->right);

        $this->sum+= $root->val;
        $root->val = $this->sum;

        $this->dfs($root->left);

        //return $root;
    }
}

$n = [4,1,6,0,2,5,7,null,null,null,3,null,null,null,8];

$tree = new Tree();

for($i = 0; $i < count($n); $i++){
    $tree->add($n[$i]);
}

$soln = new Solution();
$soln->bstToGst($tree->root);

$tree->bfs();
var_export($tree->arr_rep);

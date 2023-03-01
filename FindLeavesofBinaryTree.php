<?php

include './Tree.php';

class Solution {
    public $hash;
    /**
     * @param TreeNode $root
     * @return Integer[][]
     */
    function findLeaves($root) {
        $this->hash = [];

        $this->dfs($root);
        return $this->hash;
    }

    function dfs($root){
      
        if($root == null){
            return -1;
        }

        $left_h = $this->dfs($root->left);
        $right_h = $this->dfs($root->right);

        $height = 1 + max($left_h,$right_h);
        $this->hash[$height][] = $root->val;
        return $height;
    }
}

$n = [1,2,3,4,5];

$tree = new Tree();

for($i = 0; $i < count($n); $i++){
    $tree->add($n[$i]);
}

$soln = new Solution();
$soln->findLeaves($tree->root);


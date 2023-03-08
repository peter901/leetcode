<?php

include "./Tree.php";

class Solution {

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function deepestLeavesSum($root) {
        
        $maxdepth =0;
        $this->sum = 0;

        $this->get_depth($root ,0, $maxdepth);
        $this->dfs($root,0,$maxdepth);

        return $this->sum;
    }

    function get_depth($root, $depth, &$maxdepth){
        
        if($root == null){
            return;
        }

        $maxdepth = max($depth, $maxdepth);

        $this->get_depth($root->left, $depth+1, $maxdepth);
        $this->get_depth($root->right, $depth+1, $maxdepth);
    }

    function dfs($root, $depth, $maxdepth){

        if($root->left != null){
            $this->dfs($root->left, $depth+1, $maxdepth);
        }

        if($root->right != null){
            $this->dfs($root->right, $depth+1, $maxdepth);
        }

        if($depth == $maxdepth){
            $this->sum += $root->val;
        }
    }
}

$n = [50,null,54,98,6,null,null,null,34];

$tree = new Tree();


for($i = 0; $i <count($n); $i++){
    $tree->add($n[$i]);
}

$soln = new Solution();
$soln->deepestLeavesSum($tree->root);
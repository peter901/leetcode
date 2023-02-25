<?php
require "./Tree.php";

class Solution {

    /**
     * @param TreeNode $root
     * @return TreeNode
     */
    function increasingBST($root) {
        $stack= [];

        $this->dfs($root, $stack);

        $right = null;
        $n = count($stack);
        for($i= 0; $i< $n; $i++){
            $cur = array_pop($stack);
            
            $cur->left = null;
            $cur->right = $right;
            $right = $cur;
        }

        return $right;
    }


    function dfs($root, &$stack){

        if($root == null){
            return;
        }

        $this->dfs($root->left,$stack);

        if($root->val !== NULL){
            array_push($stack, $root);
        }

        $this->dfs($root->right,$stack);
    }
}

$soln = new Solution();

var_export($soln->increasingBST($tree->root));
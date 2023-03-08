<?php
class Solution {

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function maxDepth($root) {
        return $this->dfs($root);
    }

    function dfs($root){

        if($root == null){
            return 0;
        }

        $leftH = $this->dfs($root->left) +1;
        $rightH = $this->dfs($root->right) +1;

        return max($leftH, $rightH);
    }
}

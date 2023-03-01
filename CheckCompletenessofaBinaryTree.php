<?php

include './Tree.php';

class Solution {

    /**
     * @param TreeNode $root
     * @return Boolean
     */
    function isCompleteTree($root) {
        return $this->dfs_check_height($root);
    }

    function dfs_check_height($root){

        if($root == null){
            $rtn = -1;
            return $rtn;
        }

        // $lh = 1+$this->dfs_check_height($root->left);
        // $rh = 1+$this->dfs_check_height($root->right);

        $h = abs(1+$this->dfs_check_height($root->left) - 1+$this->dfs_check_height($root->right));

        if($h > 1){
            return false;
        }

        return true;
    }

    function dfs_check_left_most_child($root){
        
        if($root == null){
            return true;
        }

        if($root->left == null && $root->right != null){
            return false;
        }

        return  $this->dfs_check_left_most_child($root->left) && $this->dfs_check_left_most_child($root->right);
    }
}

//$n = [1,2,3,4,5,6];
$n = [6,3,5,null,2,null,null,null,1];

$tree = new Tree();
$root = $tree->create_tree($n);

$soln = new Solution();
$rtn = $soln->isCompleteTree($root);
echo $rtn;
<?php
include  "./Tree.php";

class Solution {

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function sumEvenGrandparent($root) {
        $this->sum =0;

        if($root->left){
            $this->dfs($root->left,-1,$root->val );
        }

        if($root->right){
            $this->dfs($root->right, -1, $root->val);
        }
        return $this->sum;
    }

    function dfs($root,$Gparent, $Parent){

        if($root == null || $root->val === null){
            return;
        }

        if($Gparent % 2 == 0){
            $this->sum += $root->val;
        }

        $this->dfs($root->left, $Parent, $root->val);
        $this->dfs($root->right, $Parent, $root->val);
    }
}

$n = [6,7,8,2,7,1,3,9,null,1,4,null,null,null,5];

$tree = new Tree();


for($i = 0; $i <count($n); $i++){
    $tree->add($n[$i]);
}

$soln = new Solution();
$soln->sumEvenGrandparent($tree->root);
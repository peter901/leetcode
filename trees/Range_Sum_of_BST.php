<?php
include "./Tree.php";


class Solution {

    /**
     * @param TreeNode $root
     * @param Integer $low
     * @param Integer $high
     * @return Integer
     */
    function rangeSumBST($root, $low, $high) {
        
        $this->sum = 0;
        $this->dfs($root, $low,$low,$high);
        
        return $this->sum;
    }

    function dfs($root,$val,$low,$high){

        if($root == null) {
            return;
        }
        $v = $root->val;

        if( $v >= $low && $v <= $high){
            $this->sum +=$v;
        }

        if($low < $v)
        {
            $this->dfs($root->left,$val,$low,$high);
        }

        if($v < $high)
        {
            $this->dfs($root->right,$val,$low,$high);
        }   
        
    }
}


$n = [10,5,15,3,7,null,18];

$tree = new Tree();

for($i =0; $i < count($n); $i++){
    $tree->add($n[$i]);
}

$soln = new Solution();

echo $soln->rangeSumBST($tree->root,7,15);
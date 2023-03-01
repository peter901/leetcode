<?php


class TreeNode {
     public $val = null;
     public $left = null;
     public $right = null;

     function __construct($val = 0, $left = null, $right = null) {
         $this->val = $val;
         $this->left = $left;
         $this->right = $right;
     }


}


class Solution {
    public $store;
    public $total_nodes;
    /**
     * @param Integer $n
     * @return TreeNode[]
     */
    function allPossibleFBT($n) {
        $this->total_nodes = $n;
        $this->dfs_backtraking($n,0,null);
        return $this->store;
    }

    function dfs_backtraking($n,$nodes, $root)
    {
        if($n == 0){

            if($nodes == $this->total_nodes)
            {
                $count = count($this->store);
                $copy = clone $this->store[$count-1];
                $this->store[] = $copy;
            }
                return;
        }

        if($root == null){
            $root = new TreeNode();
            $this->store[] = $root;
            $n--;
            $nodes++;
        }
        
        for($i=0; $i<=$n; $i+=2){
            $root->left = new TreeNode();
            $root->right = new TreeNode();
            $this->dfs_backtraking($n-2,$nodes+2,$root->left);
            $root->left = null;
            $root->right = null;
            $this->dfs_backtraking($n-2,$nodes,$root->right);
        } 
    }

    function __clone()
    {
        
    }
}

$soln = new Solution();

$n =7;
$soln->allPossibleFBT($n);
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

    public $root = null;
    /**
     * @param Integer[] $nums
     * @return TreeNode
     */
    function constructMaximumBinaryTree($nums) {
        $low =0;
        $high = count($nums)-1;

        $this->dfs($low, $high, $nums, $this->root,-1);
        return $this->root;
    }

    function dfs($low,$high,&$nums,$root,$parent_index){

        // base case if $low > $high return null;
        if($low > $high || $high >= count($nums) || $low < 0){
            return;
        }

        $index = $this->getMax($low, $high,$nums);
        $max= $nums[$index];

        $node = new TreeNode($max);

        // if root is null assign val to root;
        if($this->root == null){
            $this->root = $node;
            
            $this->dfs($low, $index-1,$nums, $this->root,$index);
            $this->dfs($index+1, $high, $nums, $this->root,$index);
        }
        else{
            if($index < $parent_index){
                $root->left = $node;
                $this->dfs($low , $index-1,$nums, $root->left,$index);
                $this->dfs($index+1, $high, $nums, $root->left,$index);
                return;
            }

            if($index > $parent_index){
                $root->right = $node;
                $this->dfs($low , $index-1,$nums, $root->right,$index);
                $this->dfs($index+1, $high, $nums, $root->right,$index);
                return;
            }
        } 
    }

    function getMax($low, $high, &$nums){
        //get max val and its index between high and low;
        $max = PHP_INT_MIN;
        $index = -1;
        
        for($i =$low; $i <= $high; $i++ ){
            if($nums[$i] > $max){
                $max = $nums[$i];
                $index = $i;
            } 
        }
        return $index;
    }
}

$nums = [3,2,1,6,0,5];

$soln = new Solution();
$soln->constructMaximumBinaryTree($nums);
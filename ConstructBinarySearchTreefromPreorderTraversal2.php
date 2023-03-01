<?php 
/**
 * Definition for a binary tree node.
 */
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
    public $id;
    public $n;
    public $preorder = [];
    /**
     * @param Integer[] $preorder
     * @return TreeNode
     */
    function bstFromPreorder($preorder) {
        
        $this->id= 0;
        $this->n = count($preorder);
        $this->preorder = $preorder;

        $low= PHP_INT_MIN;
        $high= PHP_INT_MAX;

        return $this->add($low,$high);
    }

    function add($low, $high){
       
        if($this->id == $this->n){
            return null;
        }

        $ele = $this->preorder[$this->id];

        if($ele < $low || $ele > $high){
            return null;
        }

        $this->id++;
        $root = new TreeNode($ele);
        $root->left = $this->add($low, $ele);
        $root->right= $this->add($ele, $high);

        return $root;
    }
}

$preorder = [8,5,1,7,10,12];
$soln = new Solution();

$soln->bstFromPreorder($preorder);


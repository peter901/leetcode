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

    /**
     * @param Integer[] $preorder
     * @return TreeNode
     */
    function bstFromPreorder($preorder) {
        
        for($i = 0; $i < count($preorder); $i++){
            $this->add($preorder[$i]);
        }
        return $this->root;
    }

    function add($x){

        $node = new TreeNode($x);
        if($this->root === null){
            $this->root = $node;
        }else{
            $cur = $this->root;
            $val = $cur->val;

            while($cur){
                
                if($x < $val){
                    if($cur->left !== null){
                        $cur = $cur->left;
                    }else{
                        $cur->left = $node;
                        return;
                    }
                }
                else{
                    if($cur->right !== null){
                        $cur = $cur->right;
                    }else{
                        $cur->right = $node;
                        return;
                    }
                }

                $val = $cur->val;
            }
        }
    }
}

$preorder = [8,5,1,7,10,12];
$soln = new Solution();

$soln->bstFromPreorder($preorder);


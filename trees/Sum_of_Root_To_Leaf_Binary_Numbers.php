<?php
include "./Tree.php";

class Solution {
    public $collection = [];
    /**
     * @param TreeNode $root
     * @return Integer
     */
    function sumRootToLeaf($root) {
        $this->collection = [];
        $this->dfs($root,[]);

        $sum =0;
        for($i = 0; $i < count($this->collection); $i++)
        {
            $sum += bindec($this->collection[$i]);
        }

        return $sum;
    }

    function dfs($root,$arr){

        if($root != null){

            array_push($arr,$root->val);
            
            if($root->right == null && $root->left == null){
                $this->collection[] = implode('',$arr);
                return;
            }
            
            
            
            $this->dfs($root->left,$arr);
            
            $this->dfs($root->right, $arr);
       }
    }
}

$n = [1,1];

$tree = new Tree();

for($i =0; $i < count($n); $i++){
    $tree->add($n[$i]);
}

$soln = new Solution();

echo $soln->sumRootToLeaf($tree->root);
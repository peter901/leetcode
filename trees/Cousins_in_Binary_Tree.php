<?php

include "./Tree.php";


class Solution {

    /**
     * @param TreeNode $root
     * @param Integer $x
     * @param Integer $y
     * @return Boolean
     */
    function isCousins($root, $x, $y) {
        
        $findx = [];
        $findy = [];
        $this->dfs($root, $x, $root->val,0,$findx);
        $this->dfs($root,$y,$root->val,0,$findy);
        
        return $findx['depth'] == $findy['depth'] && $findx['parent'] != $findy['parent'];


    }

    function dfs($root,$v,$parent,$depth, &$b){
        
        if($root == null){
            return;
        }

        if($root->val == $v){
            $b['depth'] = $depth;
            $b['parent'] = $parent;
            return;
        }

        $this->dfs($root->left, $v, $root->val, $depth+1, $b);

        $this->dfs($root->right, $v, $root->val, $depth+1, $b);
    }
}


$n = [1,2,3,null,4,null,5];

$tree = new Tree();


for($i = 0; $i <count($n); $i++){
    $tree->add($n[$i]);
}

$soln = new Solution();
$soln->isCousins($tree->root,5,4);
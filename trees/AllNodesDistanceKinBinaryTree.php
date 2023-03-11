<?php

include './Tree.php';

class Solution {
    /**
     * @param TreeNode $root
     * @param TreeNode $target
     * @param Integer $k
     * @return Integer[]
     */
    function distanceK($root, $target, $k) {
        
        $graph = [];
   
        $this->dfs($root, $graph);
        var_export($graph);
        exit;
        return $graph;
    }

    function dfs($root,&$graph){

        if($root == null || $root->val === null){
            return;
        }
        
        if($root->left !== null && $root->left->val !== null){
            $graph[$root->val][] = $root->left->val;
        }

        if($root->right !== null && $root->right->val !== null){
            $graph[$root->val][] = $root->right->val;
        }


        $this->dfs($root->left, $graph);
        $this->dfs($root->right, $graph);
    }
}

$soln = new Solution();
//[3,5,1,6,2,0,8,null,null,7,4], target = 5, k = 2

$res = $soln->distanceK(createTree([3,5,1,6,2,0,8,null,null,7,4]),new TreeNode(5),2);

var_export($res);

function createTree($n){
    $tree = new Tree();

    for($i = 0; $i <count($n); $i++){
        $tree->add($n[$i]); 
    }
    return $tree->root;
}
<?php

//  require './Tree.php';


class Solution {

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function maxAncestorDiff($root) {
        $arr = [];
        $this->dfs($root, $root->val,$root->val, $arr);
        return max($arr);
    }


    function dfs($root,$max, $min, &$arr)
    {
        if($root== null || $root->val === null)
        {
            return;
        }

        $val = $root->val;

        if($val > $max){
            $max = $val;
        }

        if($val < $min){
            $min = $val;
        }

        $this->dfs($root->left,$max,$min,$arr);

        $this->dfs($root->right,$max,$min,$arr);

        $diff = $max - $min;
        $arr[$diff] = $diff;
    }
}

// $soln = new Solution();

// $soln->maxAncestorDiff(createTree([8,3,10,1,6,null,14,null,null,4,7,13]));

// function createTree($n){
//     $tree = new Tree();

//     for($i = 0; $i <count($n); $i++){
//         $tree->add($n[$i]); 
//     }
//     return $tree->root;
// }
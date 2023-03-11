<?php
include './Tree.php';
class Solution {

    /**
     * @param TreeNode $root
     * @return TreeNode
     */
    function pruneTree($root) {
        
        $this->dfs($root,null, null);

        return $root;
    }

    function dfs($root, $prev, $dir){

        if($root == null || $root->val === null){
            return;
        }


        $this->dfs($root->left,$root, 'left');
        $this->dfs($root->right,$root,'right');

        if($root->val === 0 && $root->left === null && $root->right === null){
            
            if($dir == 'left'){
                $prev->left =null;
            }else{
                $prev->right = null;
            }
        }
    }
}


$soln = new Solution();

$res = $soln->pruneTree(createTree([1,0,1,0,0,0,1]));
var_export($res->val);
function createTree($n){
    $tree = new Tree();

    for($i = 0; $i <count($n); $i++){
        $tree->add($n[$i]); 
    }
    return $tree->root;
}
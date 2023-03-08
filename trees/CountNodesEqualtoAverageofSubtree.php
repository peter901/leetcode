<?php
include  "./Tree.php";
class Solution {

    public $count;
    /**
     * @param TreeNode $root
     * @return Integer
     */
    function averageOfSubtree($root) {
        
        $this->count=0;

        $this->dfs($root);

        return $this->count;
    }

    function dfs($root){
        
        $val = $root->val;
        $left_arr = $right_arr = ['sum'=>0,'count'=>0];

        if($root->right == null && $root->left == null){
            $this->count++;
            return ['sum'=>$val, 'count'=>1];
        }

        if($root->left){
            $left_arr = $this->dfs($root->left);
        }

        if($root->right){
            $right_arr = $this->dfs($root->right);
        }

        $sum = $val + $left_arr['sum'] + $right_arr['sum'];
        $count = 1+ $left_arr['count'] + $right_arr['count'];

        $avg_float = $sum/$count;
        $avg = intval($avg_float);


        if($avg == $val){
            $this->count++;
        }

        return ['sum'=>$sum,'count'=>$count];
    }
}


$n = [4,8,5,0,1,null,6];
//$n = [1,null,3,null,1,null,3];
$tree = new Tree();


for($i = 0; $i <count($n); $i++){
    $tree->add($n[$i]);
}

$tree->clean();

$soln = new Solution();
$soln->averageOfSubtree($tree->root);
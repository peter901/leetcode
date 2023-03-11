<?php 
include './Tree.php';

class Solution {

    /**
     * @param TreeNode $root
     * @param TreeNode $u
     * @return TreeNode
     */
    function findNearestRightNode($root, $u) {
        

        $queue = [];

        array_push($queue, $root);
        $length =1;
        $count = 0;
        $level = [];

        while(count($queue) > 0){
            
            $length = count($queue);
            $count =0;
            $arr = [];

            while($count < $length)
            {
                $ele = array_shift($queue);

              

                if($ele->val !== null)
                {
                    $arr[] = $ele;
                }

                if($ele->val === $u->val)
                {
                    if(count($arr) > 1)
                    {
                        return $arr[count($arr)-2];
                    }else{
                        return null;
                    }
                }

                if($ele->right !== null){
                    array_push($queue, $ele->right);
                }

                if($ele->left !== null){
                    array_push($queue, $ele->left);
                }
                $count++;
            }
            $level[] = $arr;
        }
     
        return null;
    }
}

$soln = new Solution();

$res = $soln->findNearestRightNode(createTree([1,2,3,null,4,5,6]),new TreeNode(4));
var_export($res->val);
function createTree($n){
    $tree = new Tree();

    for($i = 0; $i <count($n); $i++){
        $tree->add($n[$i]); 
    }
    return $tree->root;
}
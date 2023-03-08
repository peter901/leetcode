<?php

class Solution
{

    /**
     * @param TreeNode $root1
     * @param TreeNode $root2
     * @return Integer[]
     */
    function getAllElements($root1, $root2)
    {
        $r1 = [];
        $r2 =[];

        $this->inorder($root1,$r1);
        $this->inorder($root2,$r2);
       
        $arr = array_merge($r1,$r2);
        sort($arr);
        return $arr;
    }

    function inorder($root,&$arr){

        if($root == null){
            return;
        }

        $this->inorder($root->left,$arr);
        if($root->val !== null){
            $arr[] = $root->val;
        }
        $this->inorder($root->right,$arr);
    }
}
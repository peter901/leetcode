<?php

class TreeNode
{

    public $val;
    public $left;
    public $right;
    public $height;

    public function __construct($val = null)
    {
        $this->val = $val;
        $this->left = null;
        $this->right = null;
        $this->height = 1;
    }
}


class BinarySearchTree
{
    public $root;

    public function __construct( )
    {
        
    }

    public function insert($val)
    {
        if($this->root === null)
        {
            $t = new TreeNode($val);
            $t->height=1;
            $this->root = $t;
        }
        else{
            $this->Rinsert($this->root, $val);
        }
    }

    public function getheight($left , $right)
    {
        $left = ($left !== null) ? $left->height : 0;
        $right = ($right !== null) ? $right->height : 0;
        
        return  max($left, $right)+1;
    }

    public function Rinsert($node, $val){

        if($node === null)
        {
            $t = new TreeNode($val);
            return $t;
        }

        if($node->val > $val){
            $node->left= $this->Rinsert($node->left,$val);
        }else{
            $node->right = $this->Rinsert($node->right, $val);
        }

        
        $node->height = $this->getheight($node->left, $node->right);

        return $node;
    }


    public function inorder()
    {
        $this->dfs($this->root);
    }

    public function dfs($root){
        
        if($root == null)
        {
            return null;
        }

        $this->dfs($root->left);
        echo "v:{$root->val} h:{$root->height} , ";
        $this->dfs($root->right);
    }
}


$bst = new BinarySearchTree();

$n = [10,8,15,7,9,11,16];

for($i=0; $i< count($n); $i++){
    $bst->insert($n[$i]);
}
$bst->insert(17);
$bst->insert(18);
$bst->insert(29);


$bst->inorder();

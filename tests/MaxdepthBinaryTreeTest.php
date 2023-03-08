<?php 
use \PHPUnit\Framework\TestCase;

require './trees/MaximumDepthofBinaryTree.php';
require './trees/Tree.php';

class MaxdepthBinaryTreeTest extends TestCase
{
    protected $tree;
    protected $soln;

    protected function setUp():void 
    {
        $this->tree = new Tree();
        $this->soln = new Solution();
    }

    private function createTree($n){

        for($i = 0; $i <count($n); $i++){
            $this->tree->add($n[$i]); 
        }
        
        return $this->tree->root;
    }

    public function testTreeMaxtdepth(){
        $n = [3,9,20,null,null,15,7];
        $root= $this->createTree($n);

        $this->assertEquals(3, $this->soln->maxDepth($root));
    }

    public function testTreeMaxtdepth1(){
        $n = [1,null,2];

        $root= $this->createTree($n);
        
        $this->assertEquals(2, $this->soln->maxDepth($root));
    }    
}
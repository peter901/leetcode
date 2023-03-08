<?php 
use \PHPUnit\Framework\TestCase;

require './trees/MaximumDifferenceBetweenNodeandAncestor.php';
require './trees/Tree.php';

class MaximumDifferenceBetweenNodeandAncestorTest extends TestCase
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

    public function test1(){
        $n = [8,3,10,1,6,null,14,null,null,4,7,13];
        $root= $this->createTree($n);

        $this->assertEquals(7, $this->soln->maxAncestorDiff($root));
    }

    public function test2(){
        $n = [1,null,2,null,0,3];

        $root= $this->createTree($n);
        
        $this->assertEquals(3, $this->soln->maxAncestorDiff($root));
    }    
}
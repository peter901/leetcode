<?php 
use \PHPUnit\Framework\TestCase;

require './trees/AllElementsinTwoBinarySearchTrees.php';
require './trees/Tree.php';

class AllElementsinTwoBinarySearchTreesTest extends TestCase
{
    protected $soln;

    protected function setUp():void 
    {
        $this->soln = new Solution();
    }

    private function createTree($n){
        $tree = new Tree();

        for($i = 0; $i <count($n); $i++){
            $tree->add($n[$i]); 
        }
        return $tree->root;
    }

    public function test1(){
        $n1 = [2,1,4];
        $n2 = [1,0,3];
        $root1= $this->createTree($n1);
        $root2= $this->createTree($n2);

        $this->assertEquals([0,1,1,2,3,4], $this->soln->getAllElements($root1,$root2));
    }

    public function test2(){
        $n1 = [1,null,8];
        $n2 = [8,1];
        $root1= $this->createTree($n1);
        $root2= $this->createTree($n2);
     
        $this->assertEquals([1,1,8,8], $this->soln->getAllElements($root1,$root2));
    }    
}
<?php

include '/home/peter/Documents/Leetcode/stacks/BuildingsWithanOceanView.php';


use \PHPUnit\Framework\TestCase;

class BuildingsWithanOceanViewTest extends TestCase
{
    protected $soln;

    public function setUp(): void
    {
        $this->soln = new Solution();
    }

    public function test1()
    {
        $heights = [4,2,3,1];


        $this->assertEquals([0,2,3],$this->soln->findBuildings($heights));
    }

    public function test2()
    {
        $heights = [4,3,2,1];


        $this->assertEquals([0,1,2,3],$this->soln->findBuildings($heights));
    }

    public function test3()
    {
        $heights = [1,3,2,4];


        $this->assertEquals([3],$this->soln->findBuildings($heights));
    }
}

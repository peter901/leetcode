<?php

include '/home/peter/Documents/Leetcode/TwoPointers/NumberofArithmeticTriplets.php';


use \PHPUnit\Framework\TestCase;

class NumberofArithmeticTripletsTest extends TestCase
{
    protected $soln;

    public function setUp(): void
    {
        $this->soln = new Solution();
    }

    public function test1()
    {
        $nums = [0,1,4,6,7,10]; $diff = 3;

        $this->assertEquals(2,$this->soln->arithmeticTriplets($nums,$diff));
    }

    public function test2()
    {
        $nums = [4,5,6,7,8,9]; $diff = 2;


        $this->assertEquals(2,$this->soln->arithmeticTriplets($nums,$diff));
    }
}
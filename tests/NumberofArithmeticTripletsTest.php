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

    public function data()
    {
        return [
            [2,[0,1,4,6,7,10], 3 ],
            [2,[4,5,6,7,8,9], 2 ],
        ];

    }

    /**
     * @dataProvider data
     */
    public function test($ans, $nums, $diff)
    {
        $this->assertEquals($ans,$this->soln->arithmeticTriplets($nums,$diff));
    }
}
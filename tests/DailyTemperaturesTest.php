<?php

include '/home/peter/Documents/Leetcode/stacks/DailyTemperatures.php';


use \PHPUnit\Framework\TestCase;

class DailyTemperaturesTest extends TestCase
{
    protected $soln;

    public function setUp(): void
    {
        $this->soln = new Solution();
    }

    public function data(){

        return [
            [[1,1,4,2,1,1,0,0],[73,74, 75, 71, 69, 72, 76, 73]],
            [[1,1,1,0],[30,40,50,60]],
            [[1,1,0],[30,60,90]]
        ];
    }

    /**
     * @dataProvider data
     */
    public function test1($ans, $temps)
    {
        $this->assertEquals($ans,$this->soln->dailyTemperatures($temps));
    }
}

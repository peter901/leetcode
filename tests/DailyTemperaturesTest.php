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

    public function test1()
    {
        $temps = [73,74, 75, 71, 69, 72, 76, 73];


        $this->assertEquals([1,1,4,2,1,1,0,0],$this->soln->dailyTemperatures($temps));
    }

    public function test2()
    {
        $temps = [30,40,50,60];


        $this->assertEquals([1,1,1,0],$this->soln->dailyTemperatures($temps));
    }

    public function test3()
    {
        $temps = [30,60,90];


        $this->assertEquals([1,1,0],$this->soln->dailyTemperatures($temps));  
    }
}

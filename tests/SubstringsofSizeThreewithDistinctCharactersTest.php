<?php

include '/home/peter/Documents/Leetcode/slidingWindow/SubstringsofSizeThreewithDistinctCharacters.php';


use \PHPUnit\Framework\TestCase;

class SubstringsofSizeThreewithDistinctCharactersTest extends TestCase
{
    protected $soln;

    public function setUp(): void
    {
        $this->soln = new Solution();
    }

    public function data()
    {
        return [
            [1,"xyzzaz" ],
            [4,"aababcabc"],
        ];

    }

    /**
     * @dataProvider data
     */
    public function test($ans, $s)
    {
        $this->assertEquals($ans,$this->soln->countGoodSubstrings($s));
    }
}
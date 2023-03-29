<?php 

include './TwoPointers/ReversePrefixofWord.php';

use \PHPUnit\Framework\TestCase;

class ReversePrefixofWordTest extends TestCase
{
    protected $soln;

    public function setup():void{
        $this->soln = new Solution();
    }

    public function test1()
    {
        $this->assertEquals("dcbaefd", $this->soln->reversePrefix("abcdefd","d"));
    }

    public function test2()
    {
        $this->assertEquals("zxyxxe", $this->soln->reversePrefix("xyxzxe","z"));
    }

    public function test3()
    {
        $this->assertEquals("abcd", $this->soln->reversePrefix("abcd","z"));
    }
}
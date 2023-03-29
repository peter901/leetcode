<?php
class HitCounter
{
    public $h;
    /**
     */
    function __construct()
    {
        $this->h = [];
    }

    /**
     * @param Integer $timestamp
     * @return NULL
     */
    function hit($timestamp)
    {
        $this->h[] = $timestamp;
    }

    /**
     * @param Integer $timestamp
     * @return Integer
     */
    function getHits(int $timestamp)
    {
        $min = (int) $timestamp - 300;

        while ($this->h[0] <= $min and count($this->h) > 0) {
            array_shift($this->h);
        }

        return count($this->h);
    }
}

$hitCounter = new HitCounter();
$hitCounter->hit(2);       
$hitCounter->hit(3);       
$hitCounter->hit(4);       
$hitCounter->getHits(300);  // 3
$hitCounter->getHits(301);   //3
$hitCounter->getHits(302);   //2
$hitCounter->getHits(303);   //1
$hitCounter->getHits(304);   
$hitCounter->hit(501);     
$hitCounter->getHits(600); 

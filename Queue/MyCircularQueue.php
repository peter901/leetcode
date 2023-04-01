<?php

class MyCircularQueue
{
    protected $size;
    protected $queue;
    protected $f;
    protected $b;

    /**
     * @param Integer $k
     */
    function __construct($k)
    {
        
        $this->size = (int) $k + 1;
        $this->queue = array_fill(0, $this->size,null);
        $this->f = $this->b = 0;
    }

    /**
     * @param Integer $value
     * @return Boolean
     */
    function enQueue($value)
    {
        if ($this->isFull()) {
            return false;
        }

        $pos = ($this->b + 1) % $this->size;
        $this->queue[$pos] = $value;
        $this->b = $pos;
        return true;
    }

    /**
     * @return Boolean
     */
    function deQueue()
    {
        if ($this->isEmpty()) {
            return false;
        }

        $this->f = ($this->f + 1) % $this->size;
        $this->queue[$this->f] = null;

        return true;
    }

    /**
     * @return Integer
     */
    function Front()
    {
        if ($this->isEmpty()) {
            return -1;
        }
        $pos = ($this->f + 1) % $this->size;

        return $this->queue[$pos];
    }

    /**
     * @return Integer
     */
    function Rear()
    {
        if ($this->isEmpty()) {
            return -1;
        }

        return $this->queue[$this->b];
    }

    /**
     * @return Boolean
     */
    function isEmpty()
    {
        if ($this->f == $this->b) {
            return true;
        }
        return false;
    }

    /**
     * @return Boolean
     */
    function isFull()
    {

        $pos = ($this->b + 1) % $this->size;

        if ($pos == $this->f) {
            return true;
        }

        return false;
    }
}

$myCircularQueue = new MyCircularQueue(3);
$val = $myCircularQueue->enQueue(1); // return True
$val = $myCircularQueue->enQueue(2); // return True
$val = $myCircularQueue->enQueue(3); // return True
$val = $myCircularQueue->deQueue(); // return True
$val = $myCircularQueue->deQueue(); // return True
$val = $myCircularQueue->enQueue(3); // return True
$val = $myCircularQueue->enQueue(3); // return True
$val = $myCircularQueue->deQueue(); // return True
$val = $myCircularQueue->deQueue(); // return True
$val = $myCircularQueue->deQueue(); // return True
$val = $myCircularQueue->deQueue(); // return False


$val = $myCircularQueue->Rear();     // return 3
$val = $myCircularQueue->isFull();   // return True
$val = $myCircularQueue->deQueue();  // return True
$val = $myCircularQueue->enQueue(4); // return True
$val = $myCircularQueue->Rear();     // return 4

$val = $myCircularQueue->Rear();     // return 4
$val = $myCircularQueue->Rear();     // return 4
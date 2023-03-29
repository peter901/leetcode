<?php

use function PHPUnit\Framework\isEmpty;

class MyCircularDeque {

    private $size;
    private $queue = [];
    private $front;
    private $back;
    /**
     * @param Integer $k
     */
    function __construct($k) {
        $this->front = $this->back = 0;
        $this->size = (int)$k+1;
        $this->queue = array_fill(0, $this->size,null);
    }
  
    /**
     * @param Integer $value
     * @return Boolean
     */
    function insertFront($value) {

        if($this->isFull()){
            return false;
        }

        $this->queue[$this->front] = $value;

        $this->front--;
        if($this->front == -1){
            $this->front = $this->size-1;
        }

        return true;        
    }
  
    /**
     * @param Integer $value
     * @return Boolean
     */
    function insertLast($value) {
        if($this->isFull()){
            return false;
        }

        $this->back = ($this->back+1)%$this->size;
        $this->queue[$this->back] = $value;
        return true;
    }
  
    /**
     * @return Boolean
     */
    function deleteFront() {
        if($this->isEmpty()){
            return false;
        }

        $this->front = ($this->front+1)%$this->size;
        $this->queue[$this->front] = null;

        return true;
    }
  
    /**
     * @return Boolean
     */
    function deleteLast() {
        if($this->isEmpty()){
            return false;
        }

        $this->queue[$this->back] = null;
        $this->back--;
        if($this->back == -1){
            $this->back = $this->size-1;
        }

        return true;
    }
  
    /**
     * @return Integer
     */
    function getFront() {
        if($this->isEmpty()){
            return -1;
        }

        $index = ($this->front+1)%$this->size;
        return $this->queue[$index];
    }
  
    /**
     * @return Integer
     */
    function getRear() {
        if($this->isEmpty()){
            return -1;
        }
        
        return $this->queue[$this->back];
    }
  
    /**
     * @return Boolean
     */
    function isEmpty() {
        if($this->front == $this->back){
            return true;
        }
        return false;
    }
  
    /**
     * @return Boolean
     */
    function isFull() {
        $back = ($this->back+1)%$this->size;
        if($back == $this->front){
            return true;
        }
        return false;
    }
}

/**
 * Your MyCircularDeque object will be instantiated and called as such:
 */
$myCircularDeque = new MyCircularDeque(3);
$ref1 = $myCircularDeque->insertLast(1);  // return True
$ref1 = $myCircularDeque->insertLast(2);  // return True
$ref1 = $myCircularDeque->insertFront(3); // return True
$ref1 = $myCircularDeque->insertFront(4); // return False, the queue is full.
$ref1 = $myCircularDeque->getRear();      // return 2
$ref1 = $myCircularDeque->isFull();       // return True
$ref1 = $myCircularDeque->deleteLast();   // return True
$ref1 = $myCircularDeque->insertFront(4); // return True
$ref1 = $myCircularDeque->getFront();     // return 4

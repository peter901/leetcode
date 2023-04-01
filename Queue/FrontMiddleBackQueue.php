<?php 
class FrontMiddleBackQueue {
    private $queue= [];
    /**
     */
    function __construct() {
        
    }
  
    /**
     * @param Integer $val
     * @return NULL
     */
    function pushFront($val) {
        array_unshift($this->queue, $val);
    }
  
    /**
     * @param Integer $val
     * @return NULL
     */
    function pushMiddle($val) {

        $count = count($this->queue);

        if($count == 0){
            array_push($this->queue, $val);
            return;
        }

        if($count%2 == 0){
            $start = ($count/2);
        }else{
            $start = floor($count/2);
        }

        if($start+1 == $count){
            $this->queue[$start+1] = $this->queue[$start];
            $this->queue[$start] = $val;
            return;
        }

        $cur = $this->queue[$start];

        for($i = $start+1; $i < $count; $i++){
            $temp = $this->queue[$i];
            $this->queue[$i] = $cur;
            $cur = $temp; 
        }
        $this->queue[$i] = $temp;
        $this->queue[$start] = $val;
    }
  
    /**
     * @param Integer $val
     * @return NULL
     */
    function pushBack($val) {
        array_push($this->queue, $val);
    }
  
    /**
     * @return Integer
     */
    function popFront() {
        if($this->isEmpty()) return -1;
        return array_shift($this->queue);
    }
  
    /**
     * @return Integer
     */
    function popMiddle() {
        if($this->isEmpty()) return -1;

        $count = count($this->queue);

        if($count%2 == 0){
            $start = ($count/2)-1;
        }else{
            $start = floor($count/2);
        }

        $delete = $this->queue[$start];

        for($i = $start; $i < $count-1; $i++){
            $cur = $this->queue[$i+1];
            $this->queue[$i] = $cur;
        }
        array_pop($this->queue);
        return $delete;
        
    }
  
    /**
     * @return Integer
     */
    function popBack() {
        if($this->isEmpty()) return -1;

        return array_pop($this->queue);
    }

    function isEmpty(){
        if(count($this->queue) == 0){
            return true;
        }

        return false;
    }
}

/**
 * Your FrontMiddleBackQueue object will be instantiated and called as such:
 */
$q = new FrontMiddleBackQueue();
$ref = $q->pushMiddle(3);  // [1, 3, 2]

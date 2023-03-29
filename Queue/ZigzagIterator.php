<?php 

class ZigzagIterator {

    private $v1;
    private $v2;
    private $count;
    /**
     * Initialize your data structure here.
     * @param Integer[] $v1
     * @param Integer[] $v2
     */
    function __construct($v1, $v2) {
        $this->v1 = $v1;
        $this->v2 = $v2;
        $this->count =0;
    }
    
    /**
     * @return Integer
     */
    function next() {

        if(count($this->v1) ==0 && count($this->v2) > 0){
            return array_shift($this->v2);
        }

        if(count($this->v1) > 0 && count($this->v2) == 0){
            return array_shift($this->v1);
        }
        
        if($this->count%2 == 0){
            $this->count++;
            return (array_shift($this->v1));
        }else{
            $this->count++;
            return (array_shift($this->v2));
        }
    }
    
    /**
     * @return Boolean
     */
    function hasNext() {
        if(count($this->v1) > 0 || count($this->v2) > 0){
            return true;
        }
        return false;
    }
}

/**
 * Your ZigzagIterator object will be instantiated and called as such:
 * $obj = ZigzagIterator($v1, $v2);
 * while ($obj->hasNext()) {
 *   array_push($ans, $obj->next())
 * }
 */
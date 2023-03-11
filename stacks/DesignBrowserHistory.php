<?php 

class BrowserHistory {

    protected $stack;
    protected $pointer;

    /**
     * @param String $homepage
     */
    function __construct($homepage) {

        array_push($this->stack,$homepage);
        $this->pointer = 0;
    }
  
    /**
     * @param String $url
     * @return NULL
     */
    function visit($url) {
        array_push($this->stack,$url);
        $this->pointer++;
    }
  
    /**
     * @param Integer $steps
     * @return String
     */
    function back($steps) {
        
    }
  
    /**
     * @param Integer $steps
     * @return String
     */
    function forward($steps) {
        
    }
}

/**
 * Your BrowserHistory object will be instantiated and called as such:
 * $obj = BrowserHistory($homepage);
 * $obj->visit($url);
 * $ret_2 = $obj->back($steps);
 * $ret_3 = $obj->forward($steps);
 */
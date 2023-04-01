<?php 
class FirstUnique {

    protected $queue;
    protected $hash; 
    /**
     * @param Integer[] $nums
     */
    function __construct($nums) {
        $this->queue = $nums;
        for($i = 0; $i < count($this->queue); $i++){
            $cur = $this->queue[$i];
            if(isset($this->hash[$cur])){
                $this->hash[$cur]++;
            }else{
                $this->hash[$cur] =1;
            }
        }
    }
  
    /**
     * @return Integer
     */
    function showFirstUnique() {

        foreach($this->hash as $k => $v){
            if($v == 1){
                return $k;
            }
        }

        return -1;
    }
  
    /**
     * @param Integer $value
     * @return NULL
     */
    function add($value) {
        $this->queue[] = $value;
        if(isset($this->hash[$value])){
            $this->hash[$value]++;
        }else{
            $this->hash[$value] =1;
        }
    }
}

/**
 * Your FirstUnique object will be instantiated and called as such:
 * $obj = FirstUnique($nums);
 * $ret_1 = $obj->showFirstUnique();
 * $obj->add($value);
 */
<?php 
class Solution {

    /**
     * @param Integer[] $deck
     * @return Integer[]
     */
    function deckRevealedIncreasing($deck) {
        $n = count($deck);
        sort($deck); // sort the deck in increasing order

        $queue = range(0, $n - 1); // create a queue of indices from 0 to n-1
        $result = array_fill(0, $n, 0); // create an array to store the final result

        for ($i = 0; $i < $n; $i++) {
            $result[$queue[0]] = $deck[$i]; // put the smallest card at the front of the queue in the first available index
            array_shift($queue); // remove the first index from the queue

            if (!empty($queue)) { // if the queue is not empty
                array_push($queue, $queue[0]); // move the first index to the back of the queue
                array_shift($queue); // remove the first index from the queue
            }
        }

        return $result;
    }
}

$soln = new Solution();

$soln->deckRevealedIncreasing([17,13,11,2,3,5,7]);
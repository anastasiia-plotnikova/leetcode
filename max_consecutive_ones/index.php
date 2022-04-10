<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findMaxConsecutiveOnes($nums) {
        $n = 0;
        $max = 0;
        $len = count($nums);
        for($i = 0; $i < $len; $i++) {
            if ($nums[$i] === 1) {
                $n++;
            } else {
                $max = $n > $max ? $n : $max;
                $n = 0;
            }
            echo "{$nums[$i]}, $n, $max\n";
        }
        return $max > $n ? $max : $n;
    }
}

$solution = new Solution();
var_dump($solution->findMaxConsecutiveOnes([1,0,1,1,0,1]));
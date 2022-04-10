<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findNumbers($nums) {
        $len = count($nums);
        $n = 0;
        for ($i=0; $i<$len; $i++) {
            if (((int)log($nums[$i], 10) + 1) % 2 === 0) {
                $n++;
            }
        }
        return $n;
    }
}

$solution = new Solution();
var_dump($solution->findNumbers([555,901,482,1771]));
<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $len = count($nums);
        $pairs = [];
        for($i = 0; $i < $len; $i++) {
            if (isset($pairs[$nums[$i]])) {
                return [$pairs[$nums[$i]],$i];
            }
            $pairs[$target-$nums[$i]] = $i;
        }
    }
}

$solution = new Solution();
var_dump($solution->twoSum([0,4,3,0], 0));
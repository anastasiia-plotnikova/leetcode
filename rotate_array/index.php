<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate(&$nums, $k) {
        $len = count($nums);
        for ($i = 0; $i < $k; $i++) {
            $a = $nums[$i+$k];
            $nums[$i+$k] = $nums[$i];
            $b = $nums[$len-1-$i];
            $nums[$len-1-$i] = $a;
            $a = $nums[$k-1-$i];
            $nums[$k-1-$i] = $b;
            $b = $nums[$len-2-$i];
            $nums[$len-2-$i] = $a;
            $nums[$k-$i] = $b;
        }
    }
}

$solution = new Solution();

// [5,6,7,1,2,3,4]
$arr = [1,2,3,4,5,6,7];
$k = 3;
$solution->rotate($arr, $k);

var_dump($arr);
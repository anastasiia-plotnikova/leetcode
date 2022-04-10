<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function sortedSquares($nums) {
        $len = count($nums);
        $res = $nums;
        for($i = 0, $j = $s = $len - 1; $s >= 0; $s--) {
            if (abs($nums[$i]) > abs($nums[$j])) {
                $res[$s] = $nums[$i]**2;
                $i++;
            } else {
                $res[$s] = $nums[$j]**2;
                $j--;
            }
        }
        return $res;
    }
}

$solution = new Solution();
 print_r($solution->sortedSquares([-4,-1,0,3,10]));


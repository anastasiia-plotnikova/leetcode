<?php

class Solution {

    /**
     * @param Integer[] $arr
     * @return NULL
     */
    function duplicateZeros(&$arr) {
        $len = count($arr);
        $r = [];
        for($i = 0; $i < $len; $i++) {
            if ($arr[$i] === 0) {
                $r[] = 0;
            }
            if ($r) {
                $r[] = $arr[$i];
                $arr[$i] = array_shift($r);
            }
        }
    }
}

$solution = new Solution();
$arr = [1,2,3];

$solution->duplicateZeros($arr);

var_dump($arr);
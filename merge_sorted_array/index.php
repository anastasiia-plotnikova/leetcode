<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {
        $len = $n + $m - 1;
        $i  = $m - 1;
        $j = $n - 1;
        for ($k = $len; $k >= 0, $j >= 0; $k--) {
            if ($nums1[$i] > $nums2[$j]) {
                $nums1[$k] = $nums1[$i];
                $i--;
            } else {
                $nums1[$k] = $nums2[$j];
                $j--;
            }
            echo "-----------------\nnums1[$i]=$nums1[$i]   nums2[$j]=$nums2[$j]      nums1[$k]=$nums1[$k]";
        }
    }
}

$solution = new Solution();

$arr1 = [-1,0,0,3,3,3,0,0,0];
$arr2 = [1,2,2];

$solution->merge($arr1,6,$arr2,3);
var_dump($arr1);
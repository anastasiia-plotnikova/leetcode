<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        $len = count($nums);
        for($i = $j = 0; $i < $len; $i++, $j++) {
            echo "---------\nnums[$i]=$nums[$j]   nums[$j]=$nums[$j]\n";
            if ($nums[$i] === $val) {
                $nums[$j] = $nums[$i+1];
                $i++;
            }
        }

        return $j;
    }
}

$s = new Solution();
$arr = [0,1,2,2,3,0,4,2];
var_dump($s->removeElement($arr, 2));

var_dump($arr);
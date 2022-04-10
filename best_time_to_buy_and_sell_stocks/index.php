<?php

class Solution {
    function maxProfit(array $prices): int
    {
        $last = $prices[0];
        $own = true;
        $money = -$last;
        for ($i = 1; $i < count($prices); $i++) {
            echo "--------{$prices[$i]}------\n";
            if ($own) {
                if ($last > $prices[$i]) {
                    echo "купить дешевле $money $last\n";
                    $money = $money + $last - $prices[$i];
                } else{
                    echo "продать $money $last\n";
                    $own = false;
                    $money += $prices[$i];
                }
            } else {
                if ($last < $prices[$i]) {
                    echo "продать дороже $money $last\n";
                    $money = $money - $last + $prices[$i];
                } else {
                    echo "купить $money $last\n";
                    $own = true;
                    $money -= $prices[$i];
                }
            }
            $last = $prices[$i];
        }

        if ($own) {
            $money += $last;
        }

        return $money > 0 ? $money : 0;
    }
}

$solution = new Solution();

var_dump($solution->maxProfit([1,7,4,2]));
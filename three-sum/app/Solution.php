<?php

namespace App;

class Solution
{
    public function threeSum(array $numbers): array
    {
        sort($numbers);
        $res = [];

        foreach ($numbers as $idx => $n) {
            if ($idx > 0 && $n == $numbers[$idx-1]) continue;

            [$l, $r] = [$idx+1, count($numbers)-1];

            while ($l < $r) {
                $sum = $n + $numbers[$l] + $numbers[$r];

                if ($sum > 0) {
                    $r--;
                } else if ($sum < 0) {
                    $l++;
                } else {
                    $res[] = [$n, $numbers[$l], $numbers[$r]];
                    $l++;

                    while ($numbers[$l] == $numbers[$l-1] && $l < $r) $l++;
                }
            }
        }

        return $res;
    }
}
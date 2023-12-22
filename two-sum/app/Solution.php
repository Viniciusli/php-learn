<?php

namespace App;

class Solution
{
    public function twoSum(array $numbers, int $target): array
    {
        $i = 0;
        $j = count($numbers);

        while ($i < $j) {
            $sum = $numbers[$i] + $numbers[$j];

            if ($sum === $target) {
                return [$i+1, $j+1];
            }

            if ($sum < $target) {
                $j--;
            } else {
                $i++;
            }
        }
        return [];
    }
}

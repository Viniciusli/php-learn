<?php

require_once '../vendor/autoload.php';

use App\Solution;

$solution = new Solution();

$numbers = [2,3,4];
$target = 6;

$result = $solution->twoSum($numbers, $target);

echo "<pre>";
var_dump($result);
echo "</pre>";

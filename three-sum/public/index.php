<?php

use App\Solution;

require_once '../vendor/autoload.php';

$solution = new Solution();

$numbers = [-1, 0, 1, 2, -1, -4];

$result = $solution->threeSum($numbers);

echo "<pre>";
var_dump($result);
echo "</pre>";

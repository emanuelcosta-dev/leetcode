<?php

/**
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer
 */
function search($nums, $target)
{
    $secondHalf = count($nums);
    $firstHalf = 0;

    while ($firstHalf <= $secondHalf) {
        $center =  intval(($secondHalf - $firstHalf) / 2) + $firstHalf;
        if ($nums[$center] == $target) {
            return $center;
        } elseif ($nums[$center] < $target) {
            $firstHalf = $center + 1;
        } else {
            $secondHalf = $center - 1;
        }
    }

    return -1;
}

$nums = [-1, 0, 3, 5, 9, 12];
$target = 9;
echo search($nums, $target);

<?php

/**
 * @param Int[] $nums
 * @param Int $target
 * @return Int[]
 */
function twoSum($nums, $target)
{
    $found = [];
    foreach ($nums as $key => $value) {
        $difference = $target - $value;
        if (isset($found[$difference])) return [$found[$difference], $key];

        $found[$value] = $key;
    }

    return [];
}

$nums = [3, 3, 4];
$target = 6;
print_r(twoSum($nums, $target));

<?php

class Solution
{

    /**
     * @param Int[] $nums
     * @return Int
     */
    function missingNumber($nums)
    {
        $count = count($nums);
        $expected = ($count * ($count + 1)) / 2;
        $result = array_sum($nums);
        return $expected - $result;
    }
}

$solution = new Solution();
$result = $solution->missingNumber([3, 0, 1]);
print_r($result);

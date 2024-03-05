<?php

class Solution
{

    /**
     * @param Int[] $nums
     * @return Int
     */
    function singleNumber($nums)
    {
        $result = 0;

        foreach ($nums as $num) {
            $result ^= $num;
        }

        return $result;
    }
}

$solution = new Solution();
$result = $solution->singleNumber([4, 2, 4, 2, 1]);
echo $result;

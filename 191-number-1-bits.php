<?php

class Solution
{
    /**
     * @param Int $n
     * @return Int
     */
    function hammingWeight($n)
    {
        $count = 0;
        while ($n != 0) {
            $count += $n & 1;
            $n = $n >> 1;
        }
        return $count;
    }
}
$solution = new Solution();
$result = $solution->hammingWeight(11);
echo $result;

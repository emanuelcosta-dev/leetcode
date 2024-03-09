<?php

class Solution
{
    /**
     * @param Int $n
     * @return Int
     */
    function reverseBits($n)
    {
        $reversed = 0;
        for ($i = 0; $i < 32; $i++) {
            $reversed <<= 1;
            $reversed |= $n & 1;
            $n >>= 1;
        }
        return $reversed;
    }
}

$solution = new Solution();
$result = $solution->reverseBits(00000010100101000001111010011100);
print_r($result);

<?php

class Solution
{

    /**
     * @param Int $n
     * @return Array[]
     */
    function countBits($n)
    {
        $bits = [];
        for ($i = 0; $i <= $n; $i++) {
            $bits[$i] = $this->countOnes($i);
        }
        return $bits;
    }

    /**
     * @param Int $num
     * @return Int
     */
    function countOnes($num)
    {
        $count = 0;
        while ($num > 0) {
            $count += $num & 1;
            $num >>= 1;
        }
        return $count;
    }
}

$solution = new Solution();
$result = $solution->countBits(5); // [0,1,1,2,1,2]
print_r($result);

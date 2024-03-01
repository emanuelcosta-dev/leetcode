<?php

class Solution
{

    /**
     * @param Int $n
     * @return Boolean
     */
    function isHappy($n)
    {
        $seen = array();

        while ($n != 1 && !isset($seen[$n])) {
            $seen[$n] = true;
            $n = $this->getDigits($n);
        }

        return $n == 1;
    }

    function getDigits($n)
    {
        $sum = 0;

        while ($n > 0) {
            $digit = $n % 10;
            $sum += $digit * $digit;
            $n = intval($n / 10);
        }

        return $sum;
    }
}

$solution = new Solution();
$result = $solution->isHappy(19);
echo ($result) ? "true" : "false";

<?php

class Solution
{

    /**
     * @param Array[] $digits
     * @return Array[]
     */
    function plusOne($digits)
    {
        $carry = 1;

        for ($i = count($digits) - 1; $i >= 0; $i--) {
            $sum = $digits[$i] + $carry;
            $digits[$i] = $sum % 10;
            $carry = intval($sum / 10);

            if ($carry === 0) {
                break;
            }
        }

        if ($carry > 0) {
            array_unshift($digits, $carry);
        }

        return $digits;
    }
}

$solution = new Solution();
$result = $solution->plusOne([1, 2, 3]);
print_r($result);

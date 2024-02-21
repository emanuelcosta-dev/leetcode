<?php
class Solution
{

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n)
    {
        if ($n <= 2) {
            return $n;
        }

        $distinct = [0, 1, 2];

        for ($i = 3; $i <= $n; $i++) {
            $distinct[$i] = $distinct[$i - 1] + $distinct[$i - 2];
        }

        return $distinct[$n];
    }
}

$solution = new Solution();
echo $solution->climbStairs(3);

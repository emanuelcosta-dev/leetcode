<?php

class Solution
{

    /**
     * @param int[] $cost
     * @return int
     */
    function minCostClimbingStairs($cost)
    {
        $number = count($cost);

        $minimumCost = array_fill(0, $number, 0);
        $minimumCost[0] = $cost[0];
        $minimumCost[1] = $cost[1];

        for ($i = 2; $i < $number; $i++) {
            $minimumCost[$i] = $cost[$i] + min($minimumCost[$i - 1], $minimumCost[$i - 2]);
        }

        return min($minimumCost[$number - 1], $minimumCost[$number - 2]);
    }
}

$solution = new Solution();
$result = $solution->minCostClimbingStairs([10, 15, 20]);
echo $result;

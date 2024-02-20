<?php

class Solution
{

    /**
     * @param Integer[] $stones
     * @return Integer
     */
    function lastStoneWeight($stones)
    {
        $maxHeap = new SplMaxHeap();

        foreach ($stones as $stone) {
            $maxHeap->insert($stone);
        }

        while ($maxHeap->count() > 1) {
            $stoneX = $maxHeap->extract();
            $stoneY = $maxHeap->extract();
            $diff = abs($stoneX - $stoneY);

            if ($diff > 0) {
                $maxHeap->insert($diff);
            }
        }

        return $maxHeap->isEmpty() ? 0 : $maxHeap->top();
    }
}

$solution = new Solution();
$result = $solution->lastStoneWeight([2, 7, 4, 1, 8, 1]);
echo $result;

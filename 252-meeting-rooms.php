<?php

class Solution
{


    function canAttendMeetings($intervals)
    {
        usort($intervals, function ($x, $y) {
            return $x[0] - $y[0];
        });

        for ($i = 1; $i < count($intervals); $i++) {
            if ($intervals[$i][0] < $intervals[$i - 1][1]) {
                return false;
            }
        }

        return true;
    }
}

$solution = new Solution();
$result = $solution->canAttendMeetings([[0, 30], [5, 10], [15, 20]]);
echo $result ? "true" : "false";

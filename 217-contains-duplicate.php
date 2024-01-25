<?
class Solution
{

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums)
    {
        return ($nums == array_unique($nums)) ? false : true;
    }
}

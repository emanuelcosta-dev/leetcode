<?php

class Solution
{

    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams($strs)
    {
        $anagrams = [];

        foreach ($strs as $str) {
            $sortedStr = $this->sortStr($str);
            $anagrams[$sortedStr][] = $str;
        }

        return array_values($anagrams);
    }

    private function sortStr($str)
    {
        $chars = str_split($str);
        sort($chars);
        return implode('', $chars);
    }
}

$solution = new Solution();
print_r($solution->groupAnagrams(["eat", "tea", "tan", "ate", "nat", "bat"]));

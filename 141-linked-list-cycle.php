<?php

//Definition for a singly-linked list.
class ListNode
{
    public $val = 0;
    public $next = null;
    function __construct($val)
    {
        $this->val = $val;
    }
}

class Solution
{
    /**
     * @param ListNode $head
     * @return Boolean
     */
    function hasCycle($head)
    {
        if ($head == null || $head->next == null) {
            return false;
        }

        $x = $head;
        $y = $head->next;

        while ($x !== $y) {
            if ($y == null || $y->next == null) {
                return false;
            }

            $x = $x->next;
            $y = $y->next->next;
        }

        return true;
    }
}

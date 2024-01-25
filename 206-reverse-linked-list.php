<?php

// Definition for a singly-linked list.
class ListNode
{
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}

class Solution
{
    /**
     * @param ListNode $head
     * @return ListNode
     */
    function reverseList($head)
    {
        $current = $head;
        $prev = null;

        while ($current != null) {
            $nextNode = $current->next;
            $current->next = $prev;
            $prev = $current;
            $current = $nextNode;
        }
        return $prev;
    }
}

$head = new ListNode(1, new ListNode(2, new ListNode(3, new ListNode(4, new ListNode(5)))));
$solution = new Solution();
print_r($solution->reverseList($head));

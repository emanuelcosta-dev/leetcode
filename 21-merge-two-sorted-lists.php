<?php


//Definition for a singly-linked list.
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
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    function mergeTwoLists($list1, $list2)
    {
        if ($list1 == null) return $list2;
        if ($list2 == null) return $list1;
        $merged = new ListNode();
        $current = $merged;
        while ($list1 != null && $list2 != null) {
            if ($list1->val > $list2->val) {
                $current->next = $list2;
                $list2 = $list2->next;
            } else {
                $current->next = $list1;
                $list1 = $list1->next;
            }
            $current = $current->next;
        }

        if ($list1 != null) {
            $current->next = $list1;
        } elseif ($list2 != null) {
            $current->next = $list2;
        }
        return $merged->next;
    }
}

//$list1 = new ListNode(1, new ListNode(2, new ListNode(4)));
//$list2 = new ListNode(1, new ListNode(3, new ListNode(4)));
$list1 = new ListNode(null);
$list2 = new ListNode(0);
$solution = new Solution();
print_r($solution->mergeTwoLists($list1, $list2));

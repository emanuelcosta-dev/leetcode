<?php

//Definition for a binary tree node.
class TreeNode
{
    public $val = null;
    public $left = null;
    public $right = null;
    function __construct($val = 0, $left = null, $right = null)
    {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}

class Solution
{

    /**
     * @param TreeNode $p
     * @param TreeNode $q
     * @return Boolean
     */
    function isSameTree($p, $q)
    {
        if ($p === null && $q === null) {
            return true;
        }

        if ($p === null || $q === null || $p->val !== $q->val) {
            return false;
        }

        return $this->isSameTree($p->left, $q->left) && $this->isSameTree($p->right, $q->right);
    }
}

// Example usage:
$tree1 = new TreeNode(1, new TreeNode(2), new TreeNode(3));
$tree2 = new TreeNode(1, new TreeNode(), new TreeNode(2));

$solution = new Solution();
$result = $solution->isSameTree($tree1, $tree2);
echo $result ? "true" : "false";
